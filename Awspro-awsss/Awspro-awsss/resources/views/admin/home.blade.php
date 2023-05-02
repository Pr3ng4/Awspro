<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<body>
    <header>
        <h1>Business Idea Generator</h1>
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Cart</a></li>
          </ul>
        </nav>
    </header>
    <div class="admin-container">
     <img class="admin-img" src="admin.png" alt="Admin Image">
     <div class="admin-details">
       <div class="admin-name">{{Auth::user()->name}}</div>
       <div class="admin-email">{{Auth::user()->email}}</div>
       <div class="admin-email">Admin</div>

     </div>
   </div>
     <table>
     <thead>
       <tr>
         <th>Idea Number</th>
         <th>Industry Type</th>
         <th>Product Type</th>
         <th>Business Type</th>
         <th>Budget</th>
         <th>Location</th>
         <th>Author</th>

        </tr>
     </thead>
     <tbody>

       @foreach ($ideas as $index => $idea)
       <tr>
           <th scope="row">{{ $index + 1 }}</th>
           <td>{{ $idea->industry_type }}</td>
           <td>{{ $idea->product_type }}</td>
           <td>{{ $idea->business_type }}</td>
           <td>{{ $idea->estimated_budget }}</td>
           <td>{{ $idea->location }}</td>
           <td>{{ $idea->name }}</td>

       </tr>
   @endforeach
     </tbody>
   </table>



     </body>
