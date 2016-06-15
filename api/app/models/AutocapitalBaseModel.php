<?

trait AutocapitalBaseModel
{
	/**
	 * проверям нужно ли пометить этот елемент как is_new для этого пользователя
	 * @return bool
	 */
	public function getIsNewByUserSession() {
		$className = get_class($this);
		$user = $this->di->get('session')->get('user');
		if (!$user or !$className) {
			return false;
		}
		return true != $entity = EntityUsersViewed::findFirst(array(
			'user_id = :userId: AND entity_alias=:Entity: AND entity_last_edit < entity_last_viewed AND entity_id = ' . $this->id,
			'bind' => array(
				'userId' => $user->id,
				'Entity' => $className
			)
		));
	}

}