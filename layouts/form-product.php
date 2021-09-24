<div class="container d-flex justify-content-center mt-5">
        <form action="functions/validar.php" method="POST" class="bg-white shadow rounded-2 border-0 border p-4" style="min-width: 500px;">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Marca</label>
                <div class="col-sm-10">
                    <select name="marca" required class="mb-4 form-select">
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Renault">Renault</option>
                        <option value="BMW">BMW</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Honda">Honda</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Linea</label>
                <div class="col-sm-10">
                    <select name="linea" required class="mb-4 form-select">
                        <option value="automovil">automovil</option>
                        <option value="motocicleta">motocicleta</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Modelo</label>
                <div class="col-sm-10">
                    <select name="modelo" required class="mb-4 form-select">
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2005">2005</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Cilindraje</label>
                <div class="col-sm-10">
                    <input type="text" required name="cilindraje" placeholder="Cilindraje" class="form-control mb-4">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Color</label>
                <div class="col-sm-10">
                    <select name="color" required class="mb-4 form-select">
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                        <option value="Azul">Azul</option>
                        <option value="Gris">Gris</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Verde">Verde oliva</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Numero de Motor</label>
                <div class="col-sm-8">
                    <input type="text" name="motor" required placeholder="Motor" class="form-control mb-4">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit"class="btn btn-outline-dark ml-auto">Agregar</button>
            </div>
        </form>
    </div>