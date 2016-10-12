<?php include 'header.php';?>

<form action="../controller/guardar.php" method="get" accept-charset="utf-8">
    <table border="1">

        <caption>Nuevo Registro</caption>
        <thead>
            <tr>
                <th>Campos</th>
                <th>Ingreso de Datos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Numero de Expediente:</td>
                <td><input type="text" name="expediente" value="" placeholder="Numero de Expediente" required /></td>
            </tr>
            <tr>
                <td>Fecha de Inicio:</td>
                <td>
                    <input type="date" name="fechaInicio" value="" placeholder="Ingrese la Fecha" required />
                </td>
            </tr>
            <tr>
                <td>Fecha de fallecimiento:</td>
                <td><input type="date" name="fechaFallecimiento" value="" placeholder="Ingrese la Fecha" required /></td>
            </tr>
            <tr>
                <td>Apellidos:</td>
                <td><input type="text" name="apellidos" value="" placeholder="Apellidos" required /></td>
            </tr>
            <tr>
                <td>Nombres:</td>
                <td><input type="text" name="nombres" value="" placeholder="Nombres" required /></td>
            </tr>
            <tr>
                <td>Legajo:</td>
                <td><input type="number" name="legajo" value="" placeholder="Num. Legajo" required /> </td>
            </tr>
            <tr>
                <td>Folios:</td>
                <td><input type="number" name="folios" value="" placeholder="Num. Folios" required /></td>
            </tr>
            <tr>
                <td>Observaciones:</td>
                <td>
                    <textarea name="observaciones" cols="50" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="reset" name="btnGuardar" value="Cancelar"></td>
                <td><input type="submit" name="btnGuardar" value="Guardar"></td>
            </tr>
        </tbody>
    </table>
</form>
<?php include 'footer.php';?>