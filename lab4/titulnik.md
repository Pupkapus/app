<p align = "center">МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ
РОССИЙСКОЙ ФЕДЕРАЦИИ
ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ
ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ
«САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</p>
<br>
<p align = "center">Институт естественных наук и техносферной безопасности</p>
<p align = "center">Кафедра информатики</p>
<p align = "center">Пак Никита Витальевич</p>
<br>
<p align = "center">Лабораторная работа №3</p>
<p align = "center">01.03.02 Прикладная математика и информатика</p>
<br>
<p align = "right" >Научный руководитель</p>
<p align = "right" >Соболев Евгений Игоревич</p>
<p align = "center" >Южно-Сахалинск</p>
<p align = "center" >2022 г.</p>
<p align = "center" ><b>ВВЕДЕНИЕ</b></p>
<p>JavaScript — мультипарадигменный язык программирования. Поддерживает объектно-ориентированный, императивный и функциональный стили. Является реализацией спецификации ECMAScript (стандарт ECMA-262).</p>
<p>JavaScript обычно используется как встраиваемый язык для программного доступа к объектам приложений. Наиболее широкое применение находит в браузерах как язык сценариев для придания интерактивности веб-страницам.
Основные архитектурные черты: динамическая типизация, слабая типизация, автоматическое управление памятью, прототипное программирование, функции как объекты первого класса.</p>
<p>На JavaScript оказали влияние многие языки, при разработке была цель сделать язык похожим на Java. Языком JavaScript не владеет какая-либо компания или организация, что отличает его от ряда языков программирования, используемых в веб-разработке.</p>
<p align = "center" >РЕШЕНИЕ ЗАДАЧ</p>
 
 ```js 
       <script>
        function z1()
        {
            let x = prompt("Введите x","");
            if (x>0)
            {
                y = Math.pow(Math.sin(x),2);
            }
            else{
                y = 1+2*(Math.sin(x*x));
            }
            alert("Ответ: " + y);
        }
        function z2()
        {
            let a,b,c,d;
            let chislo = prompt("Введите число","");
            if ((chislo<=9999)&&(chislo>=1000))
            {
                a=parseInt(chislo/1000);
                b=(parseInt(chislo/100))%10;
                c=(parseInt(chislo/10))%10;
                d=chislo%10;
                if ((a==d)&&(b==c))
                {alert(chislo+ "- полиндром!");}
                else {alert(chislo + "- не полиндром!");}
            }
            else{
                alert("Неправильно введено число!");
                z2();
            }
        }
        function z3()
        {
            let visokos = prompt("Введите год","");
            if (visokos%4==0)
            { alert(visokos + "- высокосный год!");}
            else{alert(visokos + "- не высокосный год!");}
        }
        function z4()
        {
            let y;
            let x = prompt("Введите x","");
            if (x<-1)
            {y=-1;}
            else if(x>-1)
            {y=x;}
            else{y=1;}
            alert("Ответ: " + y);
        }
        function z5()
        {
            let m = prompt("Введите номер месяца","");
            if((m>=3)&&(m<=5))
            {alert("Весна!");}
            else if((m>=6)&&(m<=8))
            {alert("Лето!");}
            else if((m>=9)&&(m<=11))
            {alert("Осень!");}
            else if((m==12)||(m==1)||(m==2))
            {alert("Зима!");}
            else{
                alert("Введите номер месяца 1-12");
                z5();
            }
        }
        function z6()
        {
            let stroka;
            let m = prompt("Введите номер масти 1-4","");           
            if (m==1){stroka = "пики";}
            else if (m==2){stroka = "трефы";}
            else if (m==3){stroka = "бубны";}
            else if (m==4){stroka = "черви";}
            else{alert("1-4, ПОЖАЛУЙСТА!"); z6();}
            let k = prompt("Введите номер карты 6-14","");
            if ((k>=6)&&(k<=10)){stroka+=" "+k;}
            else if (k==11){stroka+=" валет";}
            else if (k==12){stroka+=" дама";}
            else if (k==13){stroka+=" король";}
            else if (k==14){stroka+=" туз";}
            else {alert("6-14, ПОЖАЛУЙСТА!"); z6();}
            alert(stroka);
        }
        function z7()
        {
            let years = prompt("введите год:", );
            let ost = Math.floor(years)%12;
            let ost2= Math.floor(years)%10;
            let otvet;
            switch (ost.toString()) {
                case '0':
                    otvet="обезьяна";
                    break;
                case '1':
                    otvet="петух";
                    break;
                case '2':
                    otvet="собака";
                    break;
                case '3':
                    otvet="свинья";
                    break;
                case '4':
                    otvet="крыса";
                    break;
                case '5':
                    otvet="корова";
                    break;
                case '6':
                    otvet="тигр";
                    break;
                case '7': 
                    otvet ="заяц";
                    break;
                case '8':
                    otvet="дракон";
                    break;
                case '9':
                    otvet="змея";
                    break;
                case '10':
                    otvet="лошадь";
                    break;
                case '11':
                    otvet="овца";
                    break;
            }
            switch (ost2.toString()) {
                case '0':
                    otvet+=" бел.";
                    break;
                case '1':
                    otvet+=" бел.";
                    break;
                case '2':
                    otvet+=" черн.";
                    break;
                case '3':
                    otvet+=" черн.";
                    break;
                case '4':
                    otvet+=" зел.";
                    break;
                case '5':
                    otvet+=" зел.";
                    break;
                case '6':
                    otvet+=" красн.";
                    break;
                case '7': 
                    otvet +=" красн.";
                    break;
                case '8':
                    otvet+=" желт.";
                    break;
                case '9':
                    otvet+=" желт.";
                    break;
                }
            alert(otvet);
        }
        function z8()
        {
            var mass = [];
            mass[0] = 9;
            let otvet = mass[0].toString() + ', ';
            for (let i = 1; i < 10; i++)
            {
                mass[i] = mass[i-1] + 9;
                otvet += mass[i].toString() + ', ';
            }
            document.getElementById("8z").innerHTML = otvet;
        }
        function z9()
        {
            var mass = [];
            for (let i = 2; i <= 20; i++) 
            {
                mass[i] = Math.sin(i).toFixed(2);
                console.log('sin['+ i +']=' + mass[i]);
            }
        }
        function z10()
        {
            let sum = 100, sumb=0,sumv=0,sumg=0;
            for (let i=101; i<=500; i++)
            {
                sum += i;
            }
            alert('a)сумму всех целых чисел от 100 до 500 = ' + sum);
            let a = prompt("Введите число a(a<=500)","");
            if (a>500)
            {
                alert('a<=500');
                z10();
            }
            else {
                for (i = Number(a); i <= 500; i++)
                {
                    sumb += i;
                }
            }
            alert('б)сумму всех целых чисел от a до 500 = ' + sumb);
            let b = prompt("Введите число b(b>=-10)","");
            if (b<-10)
            {
                alert('b>=-10');
                z10();
            }
            else {
                for (i = -10; i <= Number(b); i++)
                {
                    sumv += i;
                }
            }
            alert('в)сумму всех целых чисел от -10 до b = ' + sumv);

            a = prompt("Введите число a(b>=a)","");
            b = prompt("Введите число b(b>=a)","");
            if (a>b)
            {
                alert('b>=a');
                z10();
            }
            else{
                for (i = Number(a); i <= Number(b); i++)
                {
                    sumg += i;
                }
            }
            alert('г)сумму всех целых чисел от a до b = ' + sumg);
        }
        function z11()
        {
            let n = prompt("Введите число n","");
            let summ = 1;
            for (let i = 2; i<=n;i++)
            {
                summ += 1/i;
            }
            document.getElementById("11z").innerHTML = summ.toFixed(2);
        }
        function z12()
        {
           let x = prompt("Введите число x","");
           let y = prompt("Введите число y",""); 
           let result=0;

           for (let i=1; i<=y; i++)
           {
                result +=Math.floor(x);
           }
           alert("(Первый способ через цикл for)Ответ: " + result);

           result = 0;
           i=1;
           while(i<=y)
           {
                result += Math.floor(x);
                i++;
           }
           alert("(Первый способ через цикл while)Ответ: " + result);
        }
        function z13()
        {
            let step=0, temp = 1;
            let n = prompt("Введите число n","");
            for (let i=0 ; i<n;i++)
            {
                step += temp;
                temp +=2;
            }
            alert(n + " в квадрате = " + step);
        }
        function z14()
        {
            let summ=Math.sqrt(50);
            for (let i=49; i>=1;i--)
            {
                summ = Math.sqrt(i + summ);
            }
            alert('сумма равна: ' + summ)
        }
        function z15()
        {
            let s=0, count=0;
            let mass=[];
            let  n = Math.floor(Math.random() * 10);
            for (let i=1; i < n; i++)
            {
                mass[i]=Math.floor(Math.random() * (9-(-9)))-9;
                console.log(mass[i]);
                s += mass[i];
                count++; 
            }
            mass[n]=0;
            count++;
            console.log(mass[n])
            alert("сумма всех чисел=" + s + ", " + "количество чисел =" + count);
        }
        function z16()
        {
            let s=0, count=0,midle=0;
            let mass=[];
            let  n = Math.floor(Math.random() * 10);
            for (let i=1; i < n; i++)
            {
                mass[i]=Math.floor(Math.random() * 9);
                console.log(mass[i]);
                s += mass[i];
                count++; 
            }
            midle=s/count;
            mass[n]=Math.floor(Math.random()*(-9));
            console.log(mass[n])
            alert("среднее арифметическое всех чисел последоваетльности(без учета последнего отрицательного числа): " + midle);
        }
        function z17()
        {
            var N=prompt("Введите хотя бы четырехзначное число:",);
            let mass = Array.from(N.toString());
            let count = 0, newcount = 0, nw=0;
            let n = mass.length;
            //a,б,в
            for(let i = 0; i < n; i++)
            {
                if (mass[i]=="3")
                {count++;}
                if (mass[i]==mass[n-1])
                {newcount++;}
                if (mass[i]%2==0)
                {nw++;}
            }
            alert("a)Количество цифр 3 в числе: " + count + ', ' + 
            "б)Количество встречающихся последних цифр: " + newcount + 
            ', ' + "в)Количество четных чисел: " + nw);
            //г, д, е
            let summ=0,proizv=0, temp=1,schet=0;
            for ( i = 0; i < n; i++ )
            {
                if(mass[i]>5)
                {summ+=Math.floor(mass[i]);}
            }
            for ( i = 0; i < n; i++ )
            {
                if(mass[i]>7)
                {temp*=Math.floor(mass[i]);}
            }
            if (temp>1)
            proizv = temp;

            for (i = 0; i < n; i++)
            {
                if (mass[i]=="5")
                {schet++;}
                if (mass[i]=="0")
                {schet++;}
            }
            alert("г)сумма цифр больше 5: " + summ + ', ' + 
            "д)произведение цифр больше 7: " + proizv + 
            ', ' + "е)количество встречабщихся в нем 5 и 0: " + schet);
        }
        function z18()
        {
            let N = 982134567;
            let mass = Array.from(N.toString());
            let n = mass.length;
            let nomer1=0, nomer2=n-1, max1=mass[0], max2=mass[n-1];
            let nom1=0, nom2=n-1, min1= mass[0], min2=mass[n-1]
            for (let i=1; i<n; i++)//поиск максимального, минимального числа от начала
            {
                if (max1<mass[i])
                {
                    max1=mass[i]; 
                    nomer1=i;
                }
                if (min1>mass[i])
                {
                    min1=mass[i];
                    nom1=i;
                }
            }

            for (i=n-2; i>=0; i--) //поиск максимального, минимального числа с конца
            {
                if (max2<mass[i])
                {
                    max2 = mass[i];
                    nomer2 = i;
                }

                if (min2>mass[i])
                {
                    min2 = mass[i];
                    nom2 = i;
                }
            }
            alert('номер максимальной цифры с начала: ' + nomer1 + ', номер максимальной цифры с конца: ' + nomer2 + ', номер минимальной цифры с начала: ' + nom1 + ', номер минимальной цифры с конца: ' + nom2);
        }
        function prost(number)
        {
            var denom = 1;
            while(++denom < number)
            {
                if (number % denom == 0)
                return false;
            }
            return true;
        }
        function z19()
        {
            let chislo =prompt("Введите число",);
            let otvet = prost(chislo);
            if (otvet==true)
            alert("Простое число")
            else alert("число не является простым!")
        }
        function z20()
        {
            let number = 2314;
            while(number>0)
            {
                if (number % 10 > number/10%10)
                {
                    number /=10;
                }
                else {alert("Число не упорядочено!"); break;}
                if (number<=0) 
                alert("Число упорядочено!"); 
            }
        }
        function z21()
        {
            let n = prompt("Введите число от 0 до 10000", );
            let mass=[], nomer=0;
            for (let i = 1; i<=10000;i++)
            {
                mass[i]=i;
                if (n==mass[i])
                {
                    nomer=i;
                    break;
                }
            } 
            if (nomer==0)
            {alert('номер такого числа отсутствует')}
            else {alert("порядковый номер этого числа =" + nomer)}

        }
        function z22()
        {
            let n = prompt("введите натуральное число",);
            let a = prompt("введите число a",);
            let b = prompt("введите число b",);
            let count1=0, count2=0;
            while (n != 0)
            {
                if (a==n%10)
                {count1++;}
                if (b==n%10)
                {count2++;}
                n = n/10;
            }
            if (count1<count2)
            alert("Да цифра А встречается реже чем цифра В.");
            else alert("Нет,цифра А встречается не реже чем цифра В.");
        }
        function z23()
        {
            let a=10
            console.log("предусловие");
            while(a<30)
            {
                console.log(a);
                a++;
            }
            console.log("постусловие")
            a=10;
            do{
                console.log(a);
                a++;
            }while(a<=30)
        }
    </script>
```