<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

        {{-- customers table --}}
        <table>
            <thead>
                   <tr>
                      
                        <h1>Customers Details</h1>
                   
                   </tr>
            
            </thead>
                <tbody>
                    <tr>
                        <th>name</th>
                        <th>phone</th>
                        <th><th>Customer address</th>
                            <th><th>zip</th>
                                <th>code</th>
                            </th>
                        </th>
                    </tr>
                   
                       @foreach ($customers as $customer)
                       <tr>
                       <td>{{$customer->name}}</td>
                       <td>{{$customer->phone}}</td>
                       <td>
                           <ul>
                               <li>{{$customer->address->address}}</li>
                               <li>{{$customer->address->city}}</li>
                           </ul>
                    


                    </td>
                    </tr>
                      @endforeach
               
            </tbody>
      
      </table>
    </body>
    </html>
</body>
</html>