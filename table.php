
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style> 
    table {
  border-collapse: collapse; /* Combine border lines between cells */
  width: 50%;
  border: 1px solid #e63f3f; /* Border around the table */
}

 th, td {
  border: 1px solid #df1212; /* Border for table cells */
  padding: 2px;
  text-align: left;
}

</style>
<table class ='table'>
    <caption>Our Tacos</caption>
    <thead>
        <tr>
            <th>Tacos</th>
            <th scope="col"><abbr title="Quantity">Qty</abbr></th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row" rowspan="3">Crunchy</th>
            <td>1</td>
            <td>$1.50</td>
        </tr>
        <tr>
            <td>2</td>
            <td>$2.50</td>
        </tr>
        <tr>
            <td>3</td>
            <td>$3.25</td>
        </tr>
        <tr>
            <th scope="row" rowspan="3">Soft</th>
            <td>1</td>
            <td>$2.00</td>
        </tr>
        <tr>
            <td>2</td>
            <td>$3.50</td>
        </tr>
        <tr>
            <td>3</td>
            <td>$4.50</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">Chips &amp; Salsa $2</td>
        </tr>
    </tfoot>
</table>