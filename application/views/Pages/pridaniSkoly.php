<style>
.ram{
    width: 100%;
    height:81%;


}
button{
    background-color: #0275d8;
    color: white;
    text-align: center;
    margin-left: 45%;
    border: 2px solid #0275d8;
    border-radius: 15px;
    padding: 15px 32px;
    transition-duration: 0.5s;
    
}

</style>
<br>
<br>
<br>
<form method="post" action='<?php echo base_url();?>zapisSkoly'>
    <div class="form-group">
        <label>Název</label>
        <input type="text" name='nazev' class="form-control">
        <label>Číslo města</label>
        <input type="number" name='mesto' class="form-control">
        <label>Geo-lat</label>
        <input type="text" name='geo_lat' class="form-control">
        <label>Geo-long</label>
        <input type="text" name='geo_long' class="form-control">
</br>
        <button type="submit">Přidat</button>

        

    </div>
</form>
<table id="uprava" class="table">
        <thead>
            <tr>
                <th scope="col">Číslo města</th>
                <th scope="col">Název</th>
            </tr>    

        </thead>
        <tbody>
            <?php foreach($mesta as $m): ?>
                <tr>
                    <td> <?php echo $m->id; ?></td>
                    <td> <?php echo $m->nazev; ?></td>

                </tr>    

            <?php endforeach; ?>    
        </tbody>        
    </table>
       
