# laravel-admin-panel
Admin panel that helps marketing agency to authenticate the user as admin or agent 

    Admin has the authority to :
        1- Allocate leads to agents
        2-view/add/edit/delete agents
        3-add and view products
        4-view submitted orders
        5-view allocated agents 

    Agent opens to see his allocated leads and submit orders to them 
    
    How it works?
    for more info https://devmarketer.io/learn/setup-laravel-project-cloned-github-com/
    
    1-clone the project 
        git clone https://github.com/NourhanMS/laravel-admin-panel.git
    2-open console from the downloaded directory or (cd laravel-admin-panel)
        then Write inside your console :
            a) composer install
            b) npm install
            c) cp .env.example .env   
            d) php artisan key:generate
            
            e)create an empty database 
            f)In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the 
            credentials of the database you just created
            
            e)php artisan migrate
            f)php artisan db:seed
            
            g) php artisan serve
         

    3- from your browser open : http://127.0.0.1:8001
        it opens a login form ,
        To enter as admin :
            name:Nourhan@gmail.com 
            password:123456789
        To enter as agent:
            name:Maissa@gmail.com 
            password:123456789
            
         note : Email and password can be any from the databse , login and enjoy .
   
    
    version used : laravel 6
