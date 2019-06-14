1 -> Instalar o docker 

2 -> Configurar no .env ( Portas , Ip's, volumes etc)

3 -> Na pasta symfonydocker correr o comando docker-compose build

4 -> Seguidamente é necessário fazer docker-compose up -d (o -d caso não pretendam ver os logs)

5 -> Caso utilizem as configurações do .env devem adicionar a seguinte rota:
    5.1 -> route add 192.168.56.0 MASK 255.255.255.0 10.0.75.1
    5.2 -> Esta configuração permite que o vosso container app comunique com o
    de mysql através de 192.168.56.1:3306

6-> Correr o comando docker ps para obter o container id, para entrar na bash
    do container ( docker exec -it <container_id> bash)
    6.1 -> Correr composer

7-> Para aceder a APP podem utilizar localhost:8001 ou 192.168.56.1:8001

8-> Para correr o command console é preciso aceder à bash do container e executar 
o seguinte comando:
    8.1 -> php application.php country Portugal
    

