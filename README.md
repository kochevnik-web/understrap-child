

#### Сайт: [База Недвижемости](http://test.joomlamix.ru) | Админка: [Вход в админку](http://test.joomlamix.ru/wp-login.php)

# Порядок и описание выполнения тестового задания

## Основные положения

- Вход в админ панель - Логин: admin, Пароль Z95646659564665z
- Для реализации использовалась дочерняя тема шаблона WP - [UnderStar](https://understrap.com) и Плагин Фреймворк [Unyson](http://unyson.io)
- Добавление произвольных типов постов "Недвижемость" и "Города" реализованно программно
- Добавление кастомных таксономий "Типы недвижемости", связанных с произвольным типом постов "Недвижемость" также реализованно программно.
- Типы записей "Недвижемость" и "Города", согласно ТЗ, связанны между собой как дочерние ("Недвижемость") и родительские ("Города") элементы. Связь через, прописанные программно, соответствующие метабоксы данных элементов.
- Метабоксы связи двух произвольных типов записей реализованны программно.
- Произвольные типы полей с характеристиками объекта для типов записей "Недвижемость" реализованна с помощью плагина Unyson. Включая гарелею для каждого объекта.
- Для вывода информации по объекту ("Недвижемость") с дополнительными характеристиками и галереей создан отдельный файл шаблона.
- Для вывода последних объектов на главной ("Недвижемость") реализован шорткод вида: [last_object count="12" title="Последние объекты" row="4"] с настройками ( сount - количество выводимых элементов, title - заголовок блока, row - количество элементов выводимых в строке ).
- Настройка row предусмотрена для того что-бы можно было выодить данный шорткод как на главной с 4 элементами в строке, так и в произвольных типах записей "Города", с 3 элементами в строке.
- Также шорткод распознает на какой странице он выводиться, и если он выводится в произвольных типах записей "Города", то он отображает только записи "Недвижемость", связанный с этим городом.
- Вывод осущевстлен адаптивно, используя синтаксис Bootstrap
- Для вывода городов на главной, также испоьлзуется шорткод вида: [cities count="8" title="Города"], с настройками ( сount - количество выводимых элементов, title - заголовок блока ).
- Оба шорткода реализованны программно
- На гланой реализованна форма добавления нового типа записи (AJAX)
- Форма реалзованна программно и ингрированна в виджет для удобства вывод формы в любой части сайта, где позволяет это сделать функционал шаблона.
- После добавления через форму нового объекта, создается новый элемент "Недвижемость" со статусом Черновик, и всеми соответстующими характеристиками.
- Подключен jQuery плагин Fancybox для отображения галереи и вывода модальных окон. 
