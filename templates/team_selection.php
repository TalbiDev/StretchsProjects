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

        <div tool>Team selection</div>

        <paper-shadow class="card" z="1">
        <h1>Team name vs team name (17/10/2015 at 15:00)</h1>
          <form>
             <table class="fullwidth">
                <tr>
                  <td>
                    <h2>Available</h2>
                    <select multiple class="team selected">
                      <option>Joe bloggs</option>
                      <option>Joe bloggs</option>
                      <option>Joe bloggs</option>
                      <option>Joe bloggs</option>
                      <option>Joe bloggs</option>
                      
                     </select> 
                  </td>
                  <td>
                     <button class="aligned">&gt;&gt;</button> 
                     <button class="aligned">&lt;&lt;</button> 
                     <button class="aligned" type="submit">submit</button> 
                  </td>
                  <td>
                    <h2>Selected</h2>
                    <select multiple class="team selected">
                      <option>Joe bloggs</option>
                      <option>Joe bloggs</option>
                      <option>Joe bloggs</option>
                      <option>Joe bloggs</option>
                      <option>Joe bloggs</option>
                     </select> 
                  </td>
                </tr>      
            </table >     
          </form>
        </paper-shadow>
        
    </core-scaffold>

 </body>
</html>

