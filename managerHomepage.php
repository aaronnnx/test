<!DOCTYPE html>
<html>
  <head>
    <style>
      body 
      {
        background-color: #F1E9E8;
        font-family: Montserrat;
        font-size: 11px;
      }
      
      ul 
      {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
      }

      li
      {
        float: left;
      }

      li a, .dropbtn 
      {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      li a:hover, .dropdown:hover .dropbtn 
      {
        background-color: green;
      }

      li.dropdown 
      {
        display: inline-block;
      }

      .dropdown-content 
      {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      .dropdown-content a 
      {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }

      .dropdown-content a:hover 
      {
        background-color: #F1E9E8;
        }

      .dropdown:hover .dropdown-content 
      {
        display: block;
      }
      
    </style>
  </head>
  
<body>
  <ul>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Member</a>
        <div class="dropdown-content">
          <a href="#">Add Member</a>
          <a href="#">Edit Member</a>
          <a href="#">View Member</a>
        </div>
    </li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Sales Record</a>
        <div class="dropdown-content">
          <a href="#">Add Sales Record</a>
          <a href="#">Edit Sales Record</a>
          <a href="#">View Sales Record</a>
        </div>
    </li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Grocery Item</a>
        <div class="dropdown-content">
          <a href="#">Add Grocery Item</a>
          <a href="#">Edit Grocery Item</a>
          <a href="#">View Grocery Item</a>
        </div>
    </li>
    
    <li><a href="#news">Generate Report</a></li>
    <li><a href="#news">Analysis</a></li>
    <li><a href="#news">Notifications</a></li>
    <li><a href="#news">Edit Personal Details</a></li>
  </ul>

</body>
</html>
