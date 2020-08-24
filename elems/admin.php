<div class="admin-center-block">
    <h3>Поменяйте информацию о продуктах, если нужно</h3>
    <form action="../task/elems/set_products.php" method="post">
        <div class="product">
            <div class="product-header">
                <p>Продукт #1</p>
            </div>
            <div class="product-set-container">
                <label>
                    <p>Заголовок</p>
                    <input type="text" name="set-preview" value="<?=$preview?>">
                </label>
                <label>
                    <p>Название</p>
                    <input type="text" name="set-name" value="<?=$name?>">
                </label>
                <label>
                    <p>С чем</p>
                    <input type="text" name="set-surname" value="<?=$surname?>">
                </label>
                <label>
                    <p>Сколько порций</p>
                    <input type="text" name="set-portions" value="<?=$portions?>">
                </label>
                <label>
                    <p>Что в подарок</p>
                    <input type="text" name="set-present" value="<?=$present?>">
                </label>
                <label>
                    <p>Вес(кг)</p>
                    <input type="number" step="0.5" name="set-weight" value="<?=$weight?>">
                </label>
                <label>
                    <p>Что внутри</p>
                    <input type="text" name="set-contains" value="<?=$contains?>">
                </label>
                <label>
                    <p>В наличии</p>
                    <p><input type="radio" name="set-disable" value="0" checked>Да</p>
                    <p><input type="radio" name="set-disable" value="1">Нет</p>
                </label>
            </div>
        </div>
        <div class="product">
            <div class="product-header">
                <p>Продукт #2</p>
            </div>
            <div class="product-set-container">
                <label>
                    <p>Заголовок</p>
                    <input type="text" name="set-preview2" value="<?=$preview2?>">
                </label>
                <label>
                    <p>Название</p>
                    <input type="text" name="set-name2" value="<?=$name2?>">
                </label>
                <label>
                    <p>С чем</p>
                    <input type="text" name="set-surname2" value="<?=$surname2?>">
                </label>
                <label>
                    <p>Сколько порций</p>
                    <input type="text" name="set-portions2" value="<?=$portions2?>">
                </label>
                <label>
                    <p>Что в подарок</p>
                    <input type="text" name="set-present2" value="<?=$present2?>">
                </label>
                <label>
                    <p>Вес(кг)</p>
                    <input type="number" step="0.5" name="set-weight2" value="<?=$weight2?>">
                </label>
                <label>
                    <p>Что внутри</p>
                    <input type="text" name="set-contains2" value="<?=$contains2?>">
                </label>
                <label>
                    <p>В наличии</p>
                    <p><input type="radio" name="set-disable2" value="0" checked>Да</p>
                    <p><input type="radio" name="set-disable2" value="1">Нет</p>
                </label>
            </div>
        </div>
        <div class="product">
            <div class="product-header">
                <p>Продукт #3</p>
            </div>
            <div class="product-set-container">
                <label>
                    <p>Заголовок</p>
                    <input type="text" name="set-preview3" value="<?=$preview3?>">
                </label>
                <label>
                    <p>Название</p>
                    <input type="text" name="set-name3" value="<?=$name3?>">
                </label>
                <label>
                    <p>С чем</p>
                    <input type="text" name="set-surname3" value="<?=$surname3?>">
                </label>
                <label>
                    <p>Сколько порций</p>
                    <input type="text" name="set-portions3" value="<?=$portions3?>">
                </label>
                <label>
                    <p>Что в подарок</p>
                    <input type="text" name="set-present3" value="<?=$present3?>">
                </label>
                <label>
                    <p>Вес(кг)</p>
                    <input type="number" step="0.5" name="set-weight3" value="<?=$weight3?>">
                </label>
                <label>
                    <p>Что внутри</p>
                    <input type="text" name="set-contains3" value="<?=$contains3?>">
                </label>
                <label>
                    <p>В наличии</p>
                    <p><input type="radio" name="set-disable3" value="0">Да</p>
                    <p><input type="radio" name="set-disable3" value="1" checked>Нет</p>
                </label>
            </div>
        </div>
        <input type="submit" name="set_changes">
    </form>
</div>