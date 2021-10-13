<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

CJSCore::Init();
?>

<div class="bx-system-auth-form">

    <?
    if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
        ShowMessage($arResult['ERROR_MESSAGE']);
    ?>

    <? if ($arResult["FORM_TYPE"] == "login"): ?>
        <a href="/auth/">Вход</a> | <a href="/auth/registration.php">Регистрация</a> | <a href="/auth/forget.php">Забыли пароль?</a>

    <?
    else:
        ?>

        <form action="<?= $arResult["AUTH_URL"] ?>">
            <a><?= $arResult["USER_NAME"] ?></a> | <a href="<?= $arResult["PROFILE_URL"] ?>">Личный кабинет</a> |
            <? foreach ($arResult["GET"] as $key => $value):?>
                <input type="hidden" name="<?= $key ?>" value="<?= $value ?>"/>
            <? endforeach ?>
            <input type="hidden" name="logout" value="yes"/>
            <input type="submit" name="logout_butt" value="<?= GetMessage("AUTH_LOGOUT_BUTTON") ?>"/>
        </form>
    <? endif ?>
</div>