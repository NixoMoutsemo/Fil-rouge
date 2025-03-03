<?php include 'header.php'; ?>
<div class="register-container">
    <h1>
        Suivi des enfants
    </h1>
    <div class="register-tab-container">
        
        <div class="register-tab-form">
        <div class ="historique">
            <label for="nom">Nom de l'enfant :</label>
            <select id="nom">
                    <option>Curabitur pretium tincidunt lacus</option>
                </select>
                <div class = "histo">
                    <p>Voir l'historique</p>
                </div>
                

        </div>
            <form action='#' method='post'  id="section1" class="register-tab-form-container ">
            <table>
        <thead>
            <tr>
                <th>Date absence</th>
                <th>Justification</th>
                <th>Nombre total absence</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>13/06/2024</td>
                <td>Curabitur pretium tincidunt lacus Curabitur pretium tincidunt</td>
                <td></td>
            </tr>
            <tr>
                <td>13/06/2024</td>
                <td>Curabitur pretium tincidunt lacus Curabitur pretium tincidunt</td>
                <td></td>

            </tr>
            <tr>
                <td>13/06/2024</td>
                <td>Curabitur pretium tincidunt lacus Curabitur pretium tincidunt</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

            
              
                <div class="register-tab-for-btn">
                    <button onclick="nextSection(1)" type="button">Supprimer </button>
                    <button onclick="nextSection(1)" type="button">Modifier </button>
                </div>
                <div class="empty-space"></div>
            </form>
         
        </div>
        <div class="menu">
            <div class="menu-item active">Suivi des présences</div>
            <div class="menu-item">Suivi médical</div>
            <div class="menu-item">Suivi comportemental</div>
            <div class="menu-item">Suivi pédagogique</div>
        </div>   
            
    </div>
    
</div>
<?php include('footer.php'); ?>