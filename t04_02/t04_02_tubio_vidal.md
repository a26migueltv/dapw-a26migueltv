**Exercicio 1. Comando scp**:

- Captura 1 - Saída do comando `scp` ao copiar o directorio completo na máquina virtual (paso 4).

![image-20261103121647518](img/image-20261103121647518.png)

&nbsp;

- Captura 2 - Saída do comando `ls -la` en `/var/www/peliculas/`, onde se vexan os ficheiros ocultos (paso 7).

![image-20261103121807618](img/image-20261103121807618.png)

&nbsp;

---



**Exercicio 2. Acceder por claves pública e privada como root**:

- Captura 1 - Claves pública e privada creadas en `~/.ssh/` (paso 2).

![image-20261103122139214](img/image-20261103122139214.png)

- Captura 2 - VSC conectado por SSH á máquina de produción como `root` cunha terminal aberta (paso 11).

![image-20261103123153801](img/image-20261103123153801.png)

&nbsp;

---



**Exercicio 3. Instalación de PHP para Apache**:

- Captura 1 - Ficheiro de definición do `virtualhost` `peliculas.conf` (paso 5).

![image-20261103124927409](img/image-20261103124927409.png)&nbsp;

- Captura 2 - Páxina `ola.php` no navegador web (paso 7).

![image-20261103125329054](img/image-20261103125329054.png)

&nbsp;

---



**Exercicio 4. Configuración de base de datos en produción**:

- Captura 1 - Táboas creadas en PHPMyAdmin (paso 7).

![Captura 1](img/ex4-captura1.png)

&nbsp;

- Captura 2 - Contido do ficheiro `.env` (paso 10).

![Captura 2](img/ex4-captura2.png)

&nbsp;

- Captura 3 - Contido da táboa `peliculas` dende PHPMyAdmin (paso 11).

![Captura 3](img/ex4-captura3.png)

&nbsp;

---



**Exercicio 5. Seguridade nas variables de contorno**:

- Captura 1 - Ficheiro de definición do `virtualhost` co bloque `Files` (paso 2).

![Captura 1](img/ex5-captura1.png)

&nbsp;

- Captura 2 - Navegador coa URL `http://peliculas.192-168-56-141.nip.io/.env`, onde se vexa que o acceso está denegado (paso 4).

![Captura 2](img/ex5-captura2.png)

&nbsp;
