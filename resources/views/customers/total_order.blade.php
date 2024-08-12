<!DOCTYPE html>
<html>
<head>
    <title>hight order</title>
</head>
<body>

<style>
    *::before, *::after{
        padding: 0;
        margin:0;
        box-sizing: border-box;
    }
    table {
    border-collapse: collapse;
    width: 100%; 
    }

    table, th, td {
    border: 0.5px solid black; 
    text-align:center;
    }
</style>

    <div class="container">
    <h1>Customer with highest number of order</h1>

@if($customers)
    <table cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Customer Number</th>
                <th>Customer Name</th>
                <th>Total Spent</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $customers->customerNumber }}</td>
                <td>{{ $customers->contactFirstName }}</td>
                <td>{{ $customers->total_order }}</td>
            </tr>
        </tbody>
    </table>
@else
    <p>No customer data available.</p>
@endif
    </div>
</body>
</html>