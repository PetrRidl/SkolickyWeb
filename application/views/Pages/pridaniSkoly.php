<style>
.ram{
    width: 100%;
    height:81%;


}
button{
    background-color: #0E66F7;
    color: white;
    text-align: center;
    margin-left: 45%;
    border: 2px solid #0E66F7;
    border-radius: 15px;
    padding: 15px 32px;
    transition-duration: 0.5s;
    
}

</style>
<br>
<br>
<br>
<form method="post" action='<?php echo base_url();?>/HlavniStrana/zapisObjednavky'>
    <div class="form-group">
        <label>Výrobce vozu</label>
        <input type="text" name='vyrobce' class="form-control">
        <label>Typ vozu</label>
        <input type="text" name='typ_vozu' class="form-control">
        <label>Registrační značka</label>
        <input type="text" name='registracni_znacka' class="form-control">
        <label>Rok výroby</label>
        <input type="text" name='rok_vyroby' class="form-control">
        <label>Obsahu motoru</label>
        <input type="text" name='obsah_motoru' class="form-control">
        <label>Převodovka</label>
        <input type="text" name='prevodovka' class="form-control">
        </br>
        <button type="submit">Přidat</button>
    </div>
</form>
