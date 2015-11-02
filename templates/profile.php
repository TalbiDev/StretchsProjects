<doctype html>
<html>
  <head>
    <title>Stretch League</title>
  </head>
  
<body  unresolved>
   <script rel="import" href="bower_components/webcomponentsjs/webcomponents.js"></script>
   
   <link rel="import" href="bower_components/core-scaffold/core-scaffold.html">
   <link rel="import" href="bower_components/core-header-panel/core-header-panel.html">
   <link rel="import" href="bower_components/core-menu/core-menu.html">
   <link rel="import" href="bower_components/core-item/core-item.html">
   <link rel="import" href="bower_components/paper-shadow/paper-shadow.html">
   <link rel="stylesheet" type="text/css" href="Public/styles/main.css"/>

   <!--
   <link rel="import" href="bower_components/polymer/polymer.html">
   <link rel="import" href="/bower_components/paper-drawer-panel/paper-drawer-panel.html">
   <link rel="import" href="/bower_components/paper-toolbar/paper-toolbar.html">
   <link rel="import" href="/bower_components/paper-material/paper-material.html">
   <link rel="import" href="/bower_components/paper-menu/paper-menu.html">
   -->
   

   <core-scaffold label="Stretch League" fit>
       <core-header-panel navigation flex mode="seamed" style="background-color:#edf1f6;">
            <core-toolbar style="background-color:#41587c; color:#fff;">Strech Toolbar</core-toolbar>
             <core-menu theme="core-light-theme">
                 <core-item icon="list" label="League Table" tag="table" url="views/table/index.php"><a href="views/table/index.php"></a></core-item>
                 <core-item icon="assessment" label="Results" tag="table" url="views/table/index.php"><a href="views/table/index.php"></a></core-item>
                 <core-item icon="event" label="Fixtures" tag="table" url="views/table/index.php"><a href="views/table/index.php"></a></core-item>
                 <core-item icon="input" label="Team selection" tag="table" url="views/table/index.php"><a href="views/table/index.php"></a></core-item>
                 <core-item icon="create" label="Result input" tag="table" url="views/table/index.php"><a href="views/table/index.php"></a></core-item>
              </core-menu>
        </core-header-panel>

        <div tool>Current positions</div>

        <paper-shadow class="card" z="1">
          <h1>Team Name</h1>
          <img class="teamlogo" src="" alt="team name logo"/>
          <table class="tableleft">
             <tbody>
                <tr>
                   <td>Manager:</td>
                   <td>Joe Bloggs</td>
                </tr>
                <tr>
                   <td>Groud name:</td>
                   <td>Ground 1</td>
                </tr>
                <tr>
                   <td>Capacity:</td>
                   <td>15,000</td>
                </tr>
                <tr>
                   <td>Adress:</td>
                   <td>123 Some street Agadir</td>
                </tr>
                <tr>
                   <td>Contact:</td>
                   <td>0666178899</td>
                </tr> 
              </tbody>
             </table>                 
             
        </paper-shadow>
        <paper-shadow class="card" z="1">
          <h2>Upcoming Fixtures</h2>
          
          <table class="data">
            <thead>
              <tr>
                <td>Date</td>
                <th>Home</th>
                <th>vs</th>
                <th>Away</th>
                <th>Rckoff</th>
              </tr>

            </thead>
            <tbody>
              <tr>
                <td>07/01/2015</td>
                <td>Team name</a></td>
                <td>vs</td>
                <td>Away Team Name</a></td>
                <td>15:00</td>
              </tr>
              <tr>
                <td>07/01/2015</td>
                <td>Team name</a></td>
                <td>vs</td>
                <td>Away Team Name</a></td>
                <td>15:00</td>
              </tr>
              <tr>
                <td>07/01/2015</td>
                <td>Team name</a></td>
                <td>vs</td>
                <td>Away Team Name</a></td>
                <td>15:00</td>
              </tr>
              <tr>
                <td>07/01/2015</td>
                <td>Team name</a></td>
                <td>vs</td>
                <td>Away Team Name</a></td>
                <td>15:00</td>
              </tr>

            </tbody>
          </table>

        </paper-shadow><paper-shadow class="card" z="1">
          <h2>Results</h2>
          
          <table class="data">
            <thead>
              <tr>
                <th>Home</th>
                <th></th>
                <th>vs</th>
                <th></th>
                <th>Away</th>
              </tr>

            </thead>
            <tbody>
              <tr>
                <td>Team name</a></td>
                <td>1</td>
                <td>vs</td>
                <td>0</a></td>
                <td>Team Awya</td>
              </tr>
              
            </tbody>
          </table>
        </paper-shadow>
        </paper-shadow><paper-shadow class="card" z="1">
          <h2>Top Goals</h2>
          
          <table class="data">
            <thead>
              <tr>
                <th>Player</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>An Example</a></td>
                <td>10</td>
              </tr>
              <tr>
                <td>An Example</a></td>
                <td>10</td>
              </tr><tr>
                <td>An Example</a></td>
                <td>10</td>
              </tr>
              <tr>
                <td>An Example</a></td>
                <td>10</td>
              </tr>
              
            </tbody>
          </table>
        </paper-shadow>
    </core-scaffold>

 </body>
</html>

