
<div>
    <label for="name">Votre Nom</label>
    <input type="text" name="name" id="name" value="<?php if (isset($name)){echo $name;}else{echo"";}?>">
</div>
<div>
    <label for="surname">Votre Prénom</label>
    <input type="text" name="surname" id="surname" value="<?php if (isset($surname)){echo $surname;}else{echo"";}?>">
</div>
<div>
    <input type="submit">
</div>
</form>