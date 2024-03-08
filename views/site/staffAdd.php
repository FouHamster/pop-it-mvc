<a href="<?= app()->route->getUrl('/staff') ?>">Добавить нового сотрудника</a>
<a href="<?= app()->route->getUrl('/division') ?>">Добавить новое подразделение</a>
<a href="<?= app()->route->getUrl('/list') ?>">Список сотрудников</a>
<a href="<?= app()->route->getUrl('/attach') ?>">Прикрепить сотрудника к подразделению</a>

<form method="post">
    <label>Фамилия <input type="" name=""></label>
    <label>Имя <input type="" name=""></label>
    <label>Отчество <input type="" name=""></label>
    <label>Пол <input type="" name=""></label>
    <label>Дата рождения <input type="" name=""></label>
    <label>Адрес прописки <input type="" name=""></label>
    <label>Должность <input type="" name=""></label>
    <label>Подразделение <input type="" name=""></label>
    <button>Добавить</button>
</form>