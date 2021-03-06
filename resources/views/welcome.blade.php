@extends('app')
@section('content')

        <div id="jsGrid"></div>

        <script>
            var clients = [
                { "Name": "Otto Clay", "Age": 25, "Country": 1, "Address": "Ap #897-1459 Quam Avenue", "Married": false },
                { "Name": "Connor Johnston", "Age": 45, "Country": 2, "Address": "Ap #370-4647 Dis Av.", "Married": true },
                { "Name": "Lacey Hess", "Age": 29, "Country": 3, "Address": "Ap #365-8835 Integer St.", "Married": false },
                { "Name": "Timothy Henson", "Age": 56, "Country": 1, "Address": "911-5143 Luctus Ave", "Married": true },
                { "Name": "Ramona Benton", "Age": 32, "Country": 3, "Address": "Ap #614-689 Vehicula Street", "Married": false }
            ];
         
            var countries = [
                { Name: "", Id: 0 },
                { Name: "United States", Id: 1 },
                { Name: "Canada", Id: 2 },
                { Name: "United Kingdom", Id: 3 }
            ];
         
            $("#jsGrid").jsGrid({
                width: "100%",
                height: "400px",
         
                inserting: true,
                editing: true,
                sorting: true,
                paging: true,
         
                data: clients,
         
                fields: [
                    { name: "id", type: "int", width: 20 },
                    { name: "year", type: "int", width: 50 },
                    { name: "coa", type: "text", width: 200 },
                    { name: "description",  type:"text", width: 300 },
                    { name: "debit-credit", type:"int", width: 50},
                    { name: "amount", type:"int", width: 50}
                ]
            });
        </script>        
@endsection