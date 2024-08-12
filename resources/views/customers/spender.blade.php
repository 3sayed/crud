<!DOCTYPE html>
<html>
<head>
    <title>Top Spender</title>

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
</head>
<body>
    <div class="container">
    <h1>Top Spender</h1>

    @if($customers)
    <table>
        <thead>
            <tr>
                <th>Customer Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Total Spent</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $customers->customerNumber }}</td>
                <td>{{ $customers->contactFirstName }}</td>
                <td>{{ $customers->contactLastName }}</td>
                <td>${{ number_format($customers->total_spent, 2) }}</td>
            </tr>
        </tbody>
    </table>
@else
    <p>No customer data available.</p>
@endif
    </div>
</body>
</html>