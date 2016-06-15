<?php

class TopicsDashboard extends Topics
{
	/**
	 * @virtual
	 * @var array
	 */
	public $brands;
	/**
	 * @virtual
	 * @var array
	 */
	public $brands_must;
	/**
	 * @virtual
	 * @var array
	 */
	public $brands_can;
	/**
	 * @virtual
	 * @var array
	 */
	public $activities;
	/**
	 * @virtual
	 * @var array
	 */
	public $posts;
	/**
	 * @virtual
	 * @var array
	 */
	public $qualificationLevels;
	/**
	 * @virtual
	 * @var array
	 */
	public $program;
	/**
	 * @virtual
	 * @var array
	 */
	public $studyPlan;
	/**
	 * @virtual
	 * @var array
	 */
	public $studyPlans = array();
	/**
	 * @virtual
	 * @var array
	 */
	public $trainings;
	/**
	 * @virtual
	 * @var array
	 */
	public $topicsMarks;
	/**
	 * @virtual
	 * @var array
	 */
	public $targetGroups;

	/**
	 * @virtual
	 * @var string
	 */
	public $train_hash_must = array();
	public $train_hash_can = array();

	/**
	 * @param bool $includeQualificationLevel
	 * @param bool $includeIsCan
	 * @return array
	 */
	public function fetchTrainHash($includeQualificationLevel = false, $includeIsCan = false) {
		foreach (TopicsTrain::findByTopicId($this->id) as $topicsTrain) {
			if(!$topicsTrain->is_must and !$includeIsCan) {continue;}
			$brandsId = array();
			foreach (TopicsTrainBrands::findByTopicTrainId($topicsTrain->id) as $item) {
				if(in_array($item->brand_id, $brandsId)) {continue;}
				$brandsId[] = $item->brand_id;
				$brand = Brands::findFirst($item->brand_id);
				if ($topicsTrain->is_must) {
					$this->train_hash_must[] = 'b' . $item->brand_id;
					$this->brands_must[] = $brand;
				} else {
					$this->train_hash_can[] = 'b' . $item->brand_id;
					$this->brands_can[] = $brand;
				}
				$this->brands[] = $brand;
			};
			$activities = array();
			$activitiesId = array();
			foreach (TopicsTrainActivity::findByTopicTrainId($topicsTrain->id) as $item) {
				if(in_array($item->activity_id, $activitiesId)) {continue;}
				$activitiesId[] = $item->activity_id;
				if ($topicsTrain->is_must) {
					$this->train_hash_must[] = 'a' . $item->activity_id;
				} else {
					$this->train_hash_can[] = 'a' . $item->activity_id;
				}
				$activities[] = Activities::findFirst($item->activity_id);
			};
			$this->activities = $activities;
			$postsId = array();
			foreach (TopicsTrainPosts::findByTopicTrainId($topicsTrain->id) as $item) {
				if(in_array($item->post_id, $postsId)) {continue;}
				$postsId[] = $item->post_id;
				if ($topicsTrain->is_must) {
					$this->train_hash_must[] = 'p' . $item->post_id;
				} else {
					$this->train_hash_can[] = 'p' . $item->post_id;
				}
				$this->posts[] = Posts::findFirst($item->post_id);
			};
			$qualificationLevelsId = array();
			foreach (TopicsTrainQualificationLevels::findByTopicTrainId($topicsTrain->id) as $item) {
				if(in_array($item->qualification_level_id, $qualificationLevelsId)) {continue;}
				$qualificationLevelsId[] = $item->qualification_level_id;
				if ($includeQualificationLevel) {
					if ($topicsTrain->is_must) {
						$this->train_hash_must[] = 'q' . $item->qualification_level_id;
					} else {
						$this->train_hash_can[] = 'q' . $item->qualification_level_id;
					}
				}
				$this->qualificationLevels[] = QualificationLevels::findFirst($item->qualification_level_id)->toArray();
			};
		}
		return $this->train_hash_must;
	}

	public function fetchStudyPlan() {
		$studyPlanTopics = StudyPlanTopics::findFirstByTopicId($this->id);
		if ($studyPlanTopics) {
			$this->studyPlan = $studyPlanTopics->StudyPlan;
		}
		$programsTopic = ProgramsTopics::findFirstByTopicId($this->id);
		if (!$programsTopic) {return;}
		$program = Programs::findFirst($programsTopic->program_id);
		$this->program = $program;
		$studyPlanPrograms = $program->StudyPlanPrograms;
		if (!$studyPlanPrograms) {return;}
		foreach ($studyPlanPrograms as $studyPlanProgram) {
			$this->studyPlans[] = $studyPlanProgram->StudyPlan;
		}
		return $this;
	}

	public function fetchTrainings($trainings = array()) {
		foreach ($this->Trainings as $key => $training) {
			$trainings[] = $training->fetchRelations()->toArrayRelations();
		}
		$this->trainings = $trainings;
	}

	public function fetchMarks($topicsMarks = array()) {
		foreach ($this->TopicsMarks as $key => $topicsMark) {
			$topicsMarks[] = $topicsMark->fetchRelations()->toArrayRelations();
		}
		$this->topicsMarks = $topicsMarks;
	}

	public function fetchTargetGroups() {
		$targetGroups = TargetGroups::find();
		if (!$targetGroups) {return;}
		$this->targetGroups = $targetGroups->filter(function($targetGroup) {
			$targetGroupTrainHash = $targetGroup->fetchTrainHash();
			if ($targetGroupTrainHash === array()) {return;}
			if ($this->train_hash_must === array()) {return;}
			$this->train_hash_must = array_unique($this->train_hash_must);
			$targetGroupTrainHash = array_unique($targetGroupTrainHash);
			$isTopicContain = $this->isArrayContain($targetGroupTrainHash, $this->train_hash_must);
			$isTargetGroupContain = $this->isArrayContain($this->train_hash_must, $targetGroupTrainHash);
			if ($isTopicContain or $isTargetGroupContain) {
				return $targetGroup;
			}
		});
	}

	public function isArrayContain($destination, $search) {
		foreach ($destination as $targetGroup) {
			if (!in_array($targetGroup, $search)) {
				return false;
			}
		}
		return true;
	}

	public function fetch() {
		$this->fetchStudyPlan();
		$this->fetchTrainHash(false);
		$this->fetchTrainings();
		$this->fetchTargetGroups();
		return $this;
	}

	public function isHasStudyPlan($studyPlanId) {
		foreach ($this->studyPlans as $studyPlan) {
			if ($studyPlan->id == $studyPlanId) {
				return true;
			}
		}
		if ($this->studyPlan and $this->studyPlan->id == $studyPlanId) {
			return true;
		}
		return false;
	}

	public function isHasUserTrain(array $userTrainHash, $canOrMust) {
		return $this->isArrayContain($userTrainHash, $canOrMust);
	}

	public function isMustOrCanHasUserTrain(array $userTrainHashes) {
		foreach ($userTrainHashes as $userTrainHash) {
			if ($this->isHasUserTrain($userTrainHash, $this->train_hash_must)) {
				return 'must';
			}
		}
		foreach ($userTrainHashes as $userTrainHash) {
			if ($this->isHasUserTrain($userTrainHash, $this->train_hash_can)) {
				return 'can';
			}
		}
		return false;
	}

	public function columnMap() {
		return array(
			'id' => 'id',
			'title_ru' => 'title_ru',
			'title_ua' => 'title_ua',
			'title_en' => 'title_en',
			'description_ru' => 'description_ru',
			'description_ua' => 'description_ua',
			'description_en' => 'description_en',
			'code' => 'code',
			'topic_type_id' => 'topic_type_id',
			'parent_id' => 'parent_id',
			'price_eur' => 'price_eur',
			'recommend_long' => 'recommend_long',
			'price_uah' => 'price_uah',
			'train_hash_must' => 'train_hash_must',
			'train_hash_can' => 'train_hash_can',
			'brands' => 'brands',
			'activities' => 'activities',
			'posts' => 'posts',
			'program' => 'program',
			'studyPlan' => 'studyPlan',
			'studyPlans' => 'studyPlans',
			'targetGroups' => 'targetGroups'
		);
	}

	public function getSource() {
		return 'topics';
	}

	public function toStdClass() {
		$properties = get_object_vars($this);
		$std = new stdClass();
		foreach ($properties as $property => $value) {
			if (is_object($value) and method_exists($value, 'toArray')) {
				$std->$property = $value->toArray();
				continue;
			}
			if (is_array($value)) {
				$array = array();
				foreach ($value as $index => $item) {
					if (is_object($item) and method_exists($item, 'toArray')) {
						$array[$index] = $item->toArray();
					}
				}
				$std->$property = $array ? $array : $value;
				continue;
			}
			if (preg_match('/^_/', $property)) {
				continue;
			}
			$std->$property = $value;
		}
		$this->fetchRelations()->toArrayRelations();
		$std->relations  = $this->relations;
		return $std;
	}

}
