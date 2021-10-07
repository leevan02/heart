<html>
<head>
    <style>
        .container {
            padding: 10px;
        }

        #contact {
            border-collapse: collapse;
            width: 100%;
        }

        #contact td,
        #contact th {
            border: 1px solid #ddd;
            padding: 8px;
            width: 30%;
        }

        #contact th {
            width: 10%;
        }

        #contact tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #contact tr:hover {
            background-color: #ddd;
        }

        #contact th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #8062c7;
            color: white;
        }
        .heading {
            background-color: lightgray;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">
            <h1>HeartOnline</h1>
        </div>
        
   <span>  <h2>Name :</h2>    <p>{{ $contact['name'] }}</p> </span> 
            
    <span><h2>Phone Number</h2> <p>{{ $contact['email'] }}</p></span>
                
           
                <h2>Email</h2>
                <p>{{ $contact['phone_number'] }}</p>
           
                <h3>Subject</h3>
                <p>{{ $contact['subject'] }}</p>
            
                <h3>Message</h3>
                <p>{{ $contact['content'] }}</p>
           
    </div>
</body>

</html>