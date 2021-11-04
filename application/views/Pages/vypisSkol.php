
<style>
.ram{
    width: 100%;
    height:81%;
   

}
</style>
<br>
<br>
<br>
  
<div class="ram">
    <table id="uprava" class="table">
        <thead>
            <tr>
                <th scope="col">Název školy</th>
                <th scope="col">Obor</th>
                <th scope="col">Rok</th>
                <th scope="col">Počet studentů</th>
            </tr>    

        </thead>
        <tbody>
            <?php foreach($skola as $s): ?>
                <tr>
                    <td> <?php echo $s->nazevSkol; ?></td>
                    <td> <?php echo $s->nazev; ?></td>
                    <td> <?php echo $s->rok; ?></td>
                    <td> <?php echo $s->pocet; ?></td>
                </tr>    

            <?php endforeach; ?>    
        </tbody>        
    </table>


</div>
