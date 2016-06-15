-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2016 at 04:35 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autocapital`
--

--
-- Dumping data for table `translations`
--

REPLACE INTO `translations` (`id`, `key`, `ru`, `ua`, `en`) VALUES
(NULL, 'Translate_example', 'Демонстрация переводов', 'Демонстрація перекладів', 'Translate example'),
(NULL, 'add', 'Добавить', 'Додати', 'Add'),
(NULL, 'educ_dir_added', 'Направление обучения успешно добавлено.', 'Напрямок навчання успішно додано.', 'The direction of education successfully added.'),
(NULL, 'enter_dir_name', 'Введите название направления', 'Введіть назву напрямку', 'Enter a name for direction'),
(NULL, 'post_added', 'Должность успешно добавлена.', 'Посаду успішно додано.', 'The post was successfully added.'),
(NULL, 'enter_post', 'Введите название должности', 'Введіть назву посади', 'Enter post title'),
(NULL, 'enter_staffing', 'Введите название штатного расписания', 'Введіть назву штатного розкладу', 'Enter a name for staffing'),
(NULL, 'ptn', 'ИНН', 'ІПН', 'PTN'),
(NULL, 'further', 'Дальше', 'Далі', 'Further'),
(NULL, 'wrong_ptn', 'Вероятно, вы ввели некорректный идентификационный код', 'Ймовірно, ви ввели некоректний ідентифікаційний код', 'You probably entered an incorrect identification code'),
(NULL, 'exists_ptn', 'Студент с этим ИНН уже существует.', 'Студент із цим ІПН вже існує.', 'Student with this PTN already exists.'),
(NULL, 'try', 'Попробуйте', 'Спробуйте', 'Try'),
(NULL, 'to_edit', 'Редактировать', 'Редагувати', 'Edit'),
(NULL, 'it', 'его', 'його', 'it'),
(NULL, 'add_dir_training', 'Добавить направление обучения', 'Додати напрямок навчання', 'Add direction training'),
(NULL, 'close', 'Закрыть', 'Закрити', 'Close'),
(NULL, 'on_page', 'Выводы на страницу', 'Виводи на сторінку', 'Conclusions on the page'),
(NULL, 'what_to_search', 'Что искать?', 'Що шукати?', 'What to search?'),
(NULL, 'search', 'Поиск', 'Пошук', 'Search'),
(NULL, 'dir_name', 'Название направления', 'Назва напрямку', 'Direction title'),
(NULL, 'action', 'Действие', 'Дія', 'Action'),
(NULL, 'to_deactivate', 'Деактивировать', 'Деактивувати', 'To deactivate'),
(NULL, 'you_on_page', 'Вы на странице %pagename% с %frompage%', 'Ви на сторінці %pagename% з %frompage%', 'You on the page %pagename% from %frompage%'),
(NULL, 'dir_not_found', 'Ни одного направления обучения не найдено!', 'Жодного напрямку навчання не знайдено!', 'No area of study not found!'),
(NULL, 'add_student', 'Добавить студента', 'Додати студента', 'Add student'),
(NULL, 'adding_ptn', 'Введение ИНН', 'Введення ІПН', 'Entering PTN'),
(NULL, 'cancel', 'Отменить', 'Відмінити', 'Cancel'),
(NULL, 'login', 'Логин', 'Логін', 'Login'),
(NULL, 'surname', 'Фамилия', 'Прізвище', 'Surname'),
(NULL, 'name', 'Имя', 'Ім\'я', 'Name'),
(NULL, 'f_name', 'Отчество', 'По-батькові', 'Father`s name'),
(NULL, 'sex', 'Пол', 'Стать', 'Sex'),
(NULL, 'date_of_birth', 'Дата рождения', 'Дата народження', 'Date of birth'),
(NULL, 'reg_ate', 'Дата регистрации', 'Дата реєстрації', 'Registration date'),
(NULL, 'is_active', 'Активный', 'Активний', 'Active'),
(NULL, 'review', 'Посмотреть', 'Переглянути', 'Review'),
(NULL, 'no_student_found', 'Ни одного студента не найдено!', 'Жодного студента не знайдено!', 'No student has been found!'),
(NULL, 'dealers', 'Дилеры', 'Дилери', 'Dealers'),
(NULL, 'all_dealers', 'Все дилеры', 'Усі дилери', 'All Dealers'),
(NULL, 'data_saved', 'Данные успешно сохранены', 'Дані успішно збережені', 'Data successfully saved'),
(NULL, 'enterprise_id', 'ID предприятия', 'ID підприємства', 'ID enterprise'),
(NULL, 'enterprise_name', 'Название предприятия', 'Назва підприємства', 'Enterprise name'),
(NULL, 'enterprise_address', 'Адрес предприятия', 'Адреса підприємства', 'Enterprise address'),
(NULL, 'parent_enterprise', 'Родительское предприятие', 'Батьківське підприємство', 'Parent Company'),
(NULL, 'missing', 'Отсутствует', 'Відсутнє', 'Missing'),
(NULL, 'no_more_dealers', 'Нет больше дилеров', 'Немає більше дилерів', 'No more dealers'),
(NULL, 'enterprise_status', 'Статус предприятия', 'Статус підприємства', 'The status of the company'),
(NULL, 'region_city', 'Область/Город', 'Область/Місто', 'Region / City'),
(NULL, 'staff_schedule', 'Штатное расписание', 'Штатний розклад', 'Staffing'),
(NULL, 'staff_schedules', 'Штатные расписания', 'Штатний розклади', 'Staffings'),
(NULL, 'brands', 'Бренды', 'Бренди', 'Brands'),
(NULL, 'action_line', 'Направление деятельности', 'Напрямок діяльності', 'Direction of'),
(NULL, 'students', 'Студенты', 'Студенти', 'Students'),
(NULL, 'edit_student', 'Редактировать студента', 'Редагувати студента', 'Edit student'),
(NULL, 'controllers', 'Контроллеры', 'Контролери', 'Controllers'),
(NULL, 'loading', 'Загрузка', 'Завантаження', 'Loading'),
(NULL, 'delete', 'Удалить', 'Видалити', 'Delete'),
(NULL, 'save', 'Сохранить', 'Зберегти', 'Save'),
(NULL, 'undo', 'Отменить', 'Відмінити', 'Undo'),
(NULL, 'add_controller', 'Добавить контролера', 'Додати контролера', 'Add Controller'),
(NULL, 'all_inspectors', 'Все инспекторы', 'Усі Інспектори', 'All inspectors'),
(NULL, 'inspectors_id', 'ID инспектора', 'ID інспектора', 'Inspector`s ID'),
(NULL, 'password', 'Пароль', 'Пароль', 'Password'),
(NULL, 'change', 'Изменить', 'Змінити', 'Edit'),
(NULL, 'm_phone', 'Моб. телефон', 'Моб. телефон', 'Mobile phone'),
(NULL, 'add_post', 'Добавить должность', 'Додати посаду', 'Add post'),
(NULL, 'all_staffing', 'Все штатные расписания', 'Усі штатні розклади', 'All staffing'),
(NULL, 'post_name', 'Название должности', 'Назва посади', 'Post title'),
(NULL, 'educ_dir', 'Направление обучения', 'Напрямок навчання', 'The direction of training'),
(NULL, 'educs_dir', 'Направления обучения', 'Напрямки навчання', 'The directions of training'),
(NULL, 'no_matches', 'По вашему запросу совпадений не найдены.', 'По вашому запиту збігів не знайдено.', 'By your query matches were found.'),
(NULL, 'can_add_new', 'Вы можете добавить новый элемент.', 'Ви можете додати новий елемент.', 'You can add a new element.'),
(NULL, 'all_students', 'Все студенты', 'Усі студенти', 'All Students'),
(NULL, 'snf', 'ФИО', 'ПІБ', 'Fool Name'),
(NULL, 'login_password', 'Логин/Пароль', 'Логін/Пароль', 'Login/Password'),
(NULL, 'education', 'Образование', 'Освіта', 'Education'),
(NULL, 'education_level', 'Образовательный уровень', 'Освітній рівень', 'Educational level'),
(NULL, 'educ_quality_level', 'Образовательно-квалификационный уровень', NULL, 'Educational qualification level'),
(NULL, 'specialty', 'Специальность', 'Спеціальність', 'Specialty'),
(NULL, 'quality', 'Кфалификация', NULL, 'Qualification'),
(NULL, 'educational_institution', 'Учебное заведение', 'Навчальний заклад', 'Educational institution'),
(NULL, 'diploma_number', '№ диплома', '№ диплому', '№ diploma'),
(NULL, 'date_issue_diploma', 'Дата выдачи диплома', 'Дата видачі диплому', 'The date of issue of the diploma'),
(NULL, 'education_saved', 'Образование сохранено', 'Освіту збережено', 'Education saved'),
(NULL, 'address', 'Адрес', 'Адреса', 'Address'),
(NULL, 'real_address', 'Адрес прописки (проживания)', 'Адреса прописки (проживання)', 'Address registration (residence)'),
(NULL, 'photo', 'Фото', 'Фото', 'Photo'),
(NULL, 'choose_photo', 'Выберите фото', 'Оберіть фото', 'Select Photos'),
(NULL, 'email', 'Эл. адрес', 'Ел. адреса', 'Email'),
(NULL, 'phones', 'Телефоны', 'Телефони', 'Phones'),
(NULL, 'contact_phone', 'Контактный', 'Контактний', 'Contact phone'),
(NULL, 'mobile_phone', 'Мобильный', 'Мобільний', 'Mobile phone'),
(NULL, 'post', 'Должность', 'Посада', 'Post'),
(NULL, 'posts', 'Должности', 'Посади', 'Posts'),
(NULL, 'enterprise', 'Предприятие', 'Підприємство', 'Enterprise'),
(NULL, 'areas_of_activity', 'Направления деятельности', 'Напрямки діяльності', 'Areas of activity'),
(NULL, 'choose_areas', 'Выберите направления', 'Оберіть напрямки', 'Choose areas'),
(NULL, 'rate', 'Ставка', 'Ставка', 'Bid'),
(NULL, 'date_of_appointment', 'Дата назначения', 'Дата призначення', 'Appointment date'),
(NULL, 'post_saved', 'Должность сохранена', 'Посаду збережено', 'The post saved'),
(NULL, 'choose_enterprise', 'Выберите предприятие', 'Оберіть підприємство', 'Select company'),
(NULL, 'choose_brands', 'Выберите бренды', 'Оберіть бренди', 'Select brand'),
(NULL, 'post_label', 'Должность (для отображения)', 'Посада (для відображення)', 'Position (for display)'),
(NULL, 'student_not_found', 'Не найдено такого студента или ошибка в запросе.', 'Не знайдено такого студента або помилка в запиті.', 'Not found such student or error in the request.'),
(NULL, 'personnel_plan', 'Кадровый план', 'Кадровий план', 'Human resource plan'),
(NULL, 'wrong_login_passw', 'Неверный логин и / или пароль!', 'Невірний логін і/або пароль!', 'Invalid username and / or password!'),
(NULL, 'no_access', 'Вам недостаточно прав для входа в систему.', 'Вам недостатньо прав для входу в систему.', 'You are not allowed to log in.'),
(NULL, 'entry', 'Вход', 'Вхід', 'Login'),
(NULL, 'add_dealer', 'Добавить дилера', 'Додати дилера', 'Add dealer'),
(NULL, 'title', 'Название', 'Назва', 'Name'),
(NULL, 'region', 'Область', 'Область', 'Region'),
(NULL, 'city', 'Город', 'Місто', 'City'),
(NULL, 'edit.', 'Ред.', 'Ред.', 'Edit'),
(NULL, 'no_dealer_found', 'Ни одного дилера не найдено!', 'Жодного дилера не знайдено!', 'No dealer found!'),
(NULL, 'no_staff_schedule_found', 'Ни одного штатного расписания не найдено!', 'Жодного штатного розкладу не знайдено!', 'No staffing has been found!'),
(NULL, 'add_inspector', 'Добавить инспектора', 'Додати інспектора', 'Add Inspector'),
(NULL, 'found_nothing', 'Ничего не найдено', 'Нічого не знайдено', 'Nothing found'),
(NULL, 'add_staff_schedule', 'Добавить штатное расписание', 'Штатний розклад', 'Staffing'),
(NULL, 'name_staff_schedule', 'Название штатного расписания', 'Назва штатного розкладу', 'Staffing name'),
(NULL, 'no_dealer_by_number', 'К сожалению дилера под таким номером не существует', 'Нажаль дилера під таким номером не існує', 'Dealer under this number does not exist'),
(NULL, 'no_inspector_by_number', 'К сожалению инспектора под таким номером не существует', 'Нажаль інспектора під таким номером не існує', 'Inspector under this number does not exist'),
(NULL, 'page_404', 'К сожалению такой страницы не найдено, или ваша сессия закончилась!', 'На жаль такої сторінки не знайдено, або ваша сесія закінчилась!', 'Sorry, this page is not found or your session is over!'),
(NULL, 'authorization', 'Авторизация', 'Авторизація', 'Authorization'),
(NULL, 'first', 'Первая', 'Перша', 'First'),
(NULL, 'previous', 'Предыдущая', 'Попередня', 'Previous'),
(NULL, 'next', 'Следующая', 'Наступна', 'Next'),
(NULL, 'last', 'Последняя', 'Остання', 'Last'),
(NULL, 'add_personnel_plan', 'Добавить кадровый план', 'Додати кадровий план', 'Add a staffing plan'),
(NULL, 'no_personnel_plan_found', 'Ни одного кадрового плана не найдено!', 'Жодного кадрового плану не знайдено!', 'No staffing plan has been found!'),
(NULL, 'no_posts_found', 'Ни одной должности не найдено!', 'Жодної посади не знайдено!', 'No post found!'),
(NULL, 'back', 'Назад', 'Назад', 'Back'),
(NULL, 'qualifications', 'Квалификации', 'Кваліфікації', 'Qualifications'),
(NULL, 'add_quality', 'Добавить квалификацию', 'Додати кваліфікацію', 'Add qualifications'),
(NULL, 'qualification_group', 'Группа квалификации', NULL, NULL),
(NULL, 'direction_study', 'Направление обучения', NULL, NULL),
(NULL, 'date_start', 'Дата начала', NULL, NULL),
(NULL, 'date_end', 'Дата окончания', NULL, NULL),
(NULL, 'test', 'Тест', NULL, NULL),
(NULL, 'seminar', 'Семинар', NULL, NULL),
(NULL, 'no_qualifications_found', 'Ни одной квалификации не найдено!', NULL, NULL),
(NULL, 'all_qualifications', 'Все квалификации', NULL, NULL),
(NULL, 'qualification_level', 'Уровень квалификации', NULL, NULL),
(NULL, 'target_groups', 'Целевые группы', 'Цільові групи', 'Target groups'),
(NULL, 'add_target_groups', 'Добавить целевую группу', NULL, NULL),
(NULL, 'all_target_groups', 'Все целевые группы', NULL, NULL),
(NULL, 'activities', 'Направление деятельности', NULL, NULL),
(NULL, 'record_created', 'Запись успешно создана', NULL, NULL),
(NULL, 'choose_post', 'Выберите должность', NULL, NULL),
(NULL, 'record_edited', 'Запись успешно отредактирована', NULL, NULL),
(NULL, 'create_add_post', 'Создать и добавить должность', NULL, NULL),
(NULL, 'add_post_error', 'Ошибка создания новой должности', NULL, NULL),
(NULL, 'all_posts', 'Все должности', NULL, NULL),
(NULL, 'adding_new_entry', 'Добавление новой записи', NULL, NULL),
(NULL, 'editing_entry', 'Редактирование записи', NULL, NULL),
(NULL, 'on', 'на', NULL, NULL),
(NULL, 'all', 'Всего', 'Всього', 'All'),
(NULL, 'all_{0}_records', 'Всего {0} записей', 'Всього {0} записів', 'Total records {0}'),
(NULL, 'in_section_empty_records', 'В данном разделе, пока нет ни одной записи', 'В даному розділі, поки немає жодного запису', 'n this section, is no audio record'),
(NULL, 'translations', 'Переводы', 'Переклади', 'Translations'),
(NULL, 'recommended_periods', 'Рекомендуемые периоды', 'Рекомендовані періоди', 'Recommended periods'),
(NULL, 'topics', 'Темы', 'Теми', 'Topics'),
(NULL, 'code', 'Код', 'Код', 'Code'),
(NULL, 'base_price ', 'Базовая стоимость', 'Базова вартість', 'Base price'),
(NULL, 'date_training ', 'Дата тренинга', 'Дата тренінгу', 'Training date'),
(NULL, 'training_type ', 'Тип тренинга', 'Тип тренінгу', 'Training type'),
(NULL, 'type', 'Тип', 'Тип', 'Type');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;