DROP VIEW IF EXISTS  topics_train_view;
CREATE VIEW topics_train_view AS
  SELECT
    NULL AS id,
    t.id AS topic_id,
    t.title_ru,
    t.title_en,
    t.title_ua,
    t.description_ru,
    t.description_en,
    t.description_ua,
    t.code,
    t.topic_type_id,
    t.parent_id,
    tt.is_must,
    tta.activity_id,
    ttb.brand_id,
    ttp.post_id,
    ttql.qualification_level_id
  FROM topics t
    LEFT JOIN topics_train tt ON tt.topic_id = t.id
    LEFT JOIN topics_train_activity tta ON tta.topic_train_id = tt.id
    LEFT JOIN topics_train_brands ttb ON ttb.topic_train_id = tt.id
    LEFT JOIN topics_train_posts ttp ON ttp.topic_train_id = tt.id
    LEFT JOIN topics_train_qualification_levels ttql ON ttql.topic_train_id = tt.id
  WHERE tta.activity_id IS NOT NULL OR ttb.brand_id IS NOT NULL OR ttp.post_id IS NOT NULL;

DROP VIEW IF EXISTS  target_groups_train_view;
CREATE VIEW target_groups_train_view AS
  SELECT
    NULL AS id,
    tg.id as target_group_id,
    tg.title,
    atg.activity_id,
    btg.brand_id,
    ptg.post_id
  FROM target_groups tg
    LEFT JOIN activities_target_groups atg ON atg.target_group_id = tg.id
    LEFT JOIN brands_target_groups btg ON btg.target_group_id = tg.id
    LEFT JOIN posts_target_groups ptg ON ptg.target_group_id = tg.id
  WHERE atg.target_group_id IS NOT NULL OR btg.target_group_id IS NOT NULL OR ptg.target_group_id IS NOT NULL;

DROP VIEW IF EXISTS  topics_study_plan_view;
CREATE VIEW topics_study_plan_view AS
  SELECT
    t.id as id,
    t.title_ru,
    t.title_ua,
    t.title_en,
    t.description_ru,
    t.description_ua,
    t.description_en,
    t.code,
    t.topic_type_id,
    t.parent_id,
    t.price_eur,
    t.price_uah,
    t.recommend_long,

    spt.study_plan_id,
    pt.program_id,
    pt.sort as program_sort

  FROM topics t
    LEFT JOIN study_plan_topics spt ON spt.topic_id = t.id
    LEFT JOIN programs_topics pt ON pt.topic_id = t.id;

DROP VIEW IF EXISTS  topics_study_plan_train_view;
CREATE VIEW topics_study_plan_train_view AS
  SELECT
    NULL AS id,
    t.id AS topic_id,
    t.title_ru,
    t.title_ua,
    t.title_en,
    t.description_ru,
    t.description_ua,
    t.description_en,
    t.code,
    t.topic_type_id,
    t.parent_id,
    t.price_eur,
    t.price_uah,
    t.recommend_long,
    t.study_plan_id,
    t.program_id,
    t.program_sort,

    tt.is_must,
    tta.activity_id,
    ttb.brand_id,
    ttp.post_id,
    ttql.qualification_level_id
  FROM topics_study_plan_view t
    LEFT JOIN topics_train tt ON tt.topic_id = t.id
    LEFT JOIN topics_train_activity tta ON tta.topic_train_id = tt.id
    LEFT JOIN topics_train_brands ttb ON ttb.topic_train_id = tt.id
    LEFT JOIN topics_train_posts ttp ON ttp.topic_train_id = tt.id
    LEFT JOIN topics_train_qualification_levels ttql ON ttql.topic_train_id = tt.id
  WHERE tta.activity_id IS NOT NULL OR ttb.brand_id IS NOT NULL OR ttp.post_id IS NOT NULL;


DROP VIEW IF EXISTS  topics_study_plan_train_view;
CREATE VIEW topics_study_plan_train_view AS
  SELECT
    NULL AS id,
    t.id AS topic_id,
    t.title_ru,
    t.title_ua,
    t.title_en,
    t.description_ru,
    t.description_ua,
    t.description_en,
    t.code,
    t.topic_type_id,
    t.parent_id,
    t.price_eur,
    t.price_uah,
    t.recommend_long,
    t.study_plan_id,
    t.program_id,
    t.program_sort,

    tt.is_must,
    tta.activity_id,
    ttb.brand_id,
    ttp.post_id,
    ttql.qualification_level_id
  FROM topics_study_plan_view t
    LEFT JOIN topics_train tt ON tt.topic_id = t.id
    LEFT JOIN topics_train_activity tta ON tta.topic_train_id = tt.id
    LEFT JOIN topics_train_brands ttb ON ttb.topic_train_id = tt.id
    LEFT JOIN topics_train_posts ttp ON ttp.topic_train_id = tt.id
    LEFT JOIN topics_train_qualification_levels ttql ON ttql.topic_train_id = tt.id
  WHERE tta.activity_id IS NOT NULL OR ttb.brand_id IS NOT NULL OR ttp.post_id IS NOT NULL;