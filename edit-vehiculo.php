<?php
    require 'layouts/header.php';
    require 'layouts/footer.php';
    require 'functions/Conexion.php';
    require 'functions/Crud.php';

    $id = $_GET['id'];
    $crud = new Crud;
    $vehiculo = $crud->callForID($id);

?>
    <div class="container d-flex justify-content-center mt-5">
        <form action="functions/editar.php" method="POST" class="bg-white shadow rounded-2 border-0 border p-4" style="min-width: 500px;">
            <div class="form-group row"> 
                <input type="text" class="d-none" name="id" value="<?php echo $vehiculo->id ?>">            
                <label class="col-sm-2 col-form-label">Marca</label>
                <div class="col-sm-10">
                    <select name="marca" required class="mb-4 form-select">
                        <option value="Chevrolet"
                            <?php if($vehiculo->marca == 'Renault'){echo 'selected';} ?>>
                            Chevrolet
                        </option>
                        <option value="Renault" 
                            <?php if($vehiculo->marca == 'Renault'){echo 'selected';} ?>>
                            Renault
                        </option>
                        <option value="BMW"
                            <?php if($vehiculo->marca == 'BMW'){echo 'selected';} ?>>
                            BMW
                        </option>
                        <option value="Suzuki"
                            <?php if($vehiculo->marca == 'Suzuki'){echo 'selected';} ?>>
                            Suzuki
                        </option>
                        <option value="Honda"
                            <?php if($vehiculo->marca == 'Honda'){echo 'selected';} ?>>
                            Honda
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Linea</label>
                <div class="col-sm-10">
                    <select name="linea" required class="mb-4 form-select">
                        <option value="automovil"
                            <?php if($vehiculo->linea == 'automovil'){echo 'selected';} ?>>
                            automovil
                        </option>
                        <option value="motocicleta"
                            <?php if($vehiculo->linea == 'motocicleta'){echo 'selected';} ?>>
                            motocicleta
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Modelo</label>
                <div class="col-sm-10">
                    <select name="modelo" required class="mb-4 form-select">
                        <option value="1990" <?php if($vehiculo->modelo == 1990){echo 'selected';} ?>>1990</option>
                        <option value="1991"<?php if($vehiculo->modelo == 1991){echo 'selected';} ?>>1991</option>
                        <option value="1992" <?php if($vehiculo->modelo == 1992){echo 'selected';} ?>>1992</option>
                        <option value="1993" <?php if($vehiculo->modelo == 1993){echo 'selected';} ?>>1993</option>
                        <option value="1994" <?php if($vehiculo->modelo == 1994){echo 'selected';} ?>>1994</option>
                        <option value="1995" <?php if($vehiculo->modelo == 1995){echo 'selected';} ?>>1995</option>
                        <option value="1996" <?php if($vehiculo->modelo == 1996){echo 'selected';} ?>>1996</option>
                        <option value="1997" <?php if($vehiculo->modelo == 1997){echo 'selected';} ?>>1997</option>
                        <option value="1998" <?php if($vehiculo->modelo == 1998){echo 'selected';} ?>>1998</option>
                        <option value="1999" <?php if($vehiculo->modelo == 1999){echo 'selected';} ?>>1999</option>
                        <option value="2000" <?php if($vehiculo->modelo == 2000){echo 'selected';} ?>>2000</option>
                        <option value="2001" <?php if($vehiculo->modelo == 2001){echo 'selected';} ?>>2001</option>
                        <option value="2002" <?php if($vehiculo->modelo == 2002){echo 'selected';} ?>>2002</option>
                        <option value="2003" <?php if($vehiculo->modelo == 2003){echo 'selected';} ?>>2003</option>
                        <option value="2004" <?php if($vehiculo->modelo == 2004){echo 'selected';} ?>>2004</option>
                        <option value="2005" <?php if($vehiculo->modelo == 2005){echo 'selected';} ?>>2005</option>
                        <option value="2005" <?php if($vehiculo->modelo == 2006){echo 'selected';} ?>>2005</option>
                        <option value="2007" <?php if($vehiculo->modelo == 2007){echo 'selected';} ?>>2007</option>
                        <option value="2008" <?php if($vehiculo->modelo == 2008){echo 'selected';} ?>>2008</option>
                        <option value="2009" <?php if($vehiculo->modelo == 2009){echo 'selected';} ?>>2009</option>
                        <option value="2010" <?php if($vehiculo->modelo == 2010){echo 'selected';} ?>>2010</option>
                        <option value="2011" <?php if($vehiculo->modelo == 2011){echo 'selected';} ?>>2011</option>
                        <option value="2012" <?php if($vehiculo->modelo == 2012){echo 'selected';} ?>>2012</option>
                        <option value="2013" <?php if($vehiculo->modelo == 2013){echo 'selected';} ?>>2013</option>
                        <option value="2014" <?php if($vehiculo->modelo == 2014){echo 'selected';} ?>>2014</option>
                        <option value="2015" <?php if($vehiculo->modelo == 2015){echo 'selected';} ?>>2015</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Cilindraje</label>
                <div class="col-sm-10">
                    <input type="text" required name="cilindraje" placeholder="Cilindraje" value="<?php echo $vehiculo->cilindraje ?>" class="form-control mb-4">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Color</label>
                <div class="col-sm-10">
                    <select name="color" required class="mb-4 form-select">
                        <option value="Blanco" <?php if($vehiculo->color == 'Blanco'){echo 'selected';} ?>>Blanco</option>
                        <option value="Negro" <?php if($vehiculo->color == 'Negro'){echo 'selected';} ?>>Negro</option>
                        <option value="Azul" <?php if($vehiculo->color == 'Azul'){echo 'selected';} ?>>Azul</option>
                        <option value="Gris" <?php if($vehiculo->color == 'Gris'){echo 'selected';} ?>>Gris</option>
                        <option value="Rojo" <?php if($vehiculo->color == 'Rojo'){echo 'selected';} ?>>Rojo</option>
                        <option value="Verde Oliva" <?php if($vehiculo->color == 'Verde oliva'){echo 'selected';} ?>>Verde Oliva</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Numero de Motor</label>
                <div class="col-sm-8">
                    <input type="text" name="motor" value="<?php echo $vehiculo->num_motor ?>" required placeholder="Motor" class="form-control mb-4">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit"class="btn btn-outline-dark ml-auto">Actualizar</button>
            </div>
        </form>
    </div>