<script>
        function z1()
        {
            let name = "Ilya";
            alert(`hello ${1}` );
            alert( `hello ${"name"}` ); 
            alert( `hello ${name}` ); 
        }
        function z2()
        {
            let person = prompt("Как вас зовут?", "Окей");
            alert(person);
        }
        function z3()
        {
            let a =1, b = 1;
            let c = ++a; 
            let d = b++; 
            alert('c= ' + c);
            alert('d= ' + d);
        }
        function z4()
        {
            let a = 2;
            let x = 1 + (a *= 2);
            alert('a= ' + a);
            alert('x= ' + x);
        }
        function z5()
        {
            console.log( "" + 1 + 0);
            console.log( "" - 1 + 0);
            console.log(true + false);
            console.log(6 / "3");
            console.log("2" * "3");
            console.log(4 + 5 + "px");
            console.log("$" + 4 + 5);
            console.log("4" - 2);
            console.log("4px" - 2);
            console.log(7 / 0);
            console.log("  -9  " + 5);
            console.log("  -9  " - 5);
            console.log(null + 1);
            console.log(undefined + 1);
            console.log(" \t \n" - 2);
        }
        function z6()
        {
            let a = +prompt("Первое число?", 1);
            let b = +prompt("Второе число?", 2);
            alert(a + b); 
        }
        function z7()
        {
            var p = Math.PI;
            console.log(p.toFixed(2));
        }
        function z8()
        {
            let a = prompt("Введите число", 1);
            alert('Вы ввели число ' + a);
        }
        function z9()
        {
            let num = prompt("Введите число ", "");
            alert(num + "- вот какое число вы ввели");
        }
        function z10()
        {
            let a = 5;
            let p = 4*5;
            alert("Периметр квадрата со сторной a=" + a +  " равен" + p )
        }
        function z11()
        {
            let r=9;
            let d=9*2;
            alert("Димаетр окружности с радиусом 9 равен " + d);
        }
        function z12()
        {
            let r = 6350;
            let h =1;
            let g = Math.sqrt(h * (2 * r + h));
            alert("Расстояние до линии горизонта от точки заданной над Землей = " + g.toFixed(2));
        }
        function z13()
        {
            let a =  5;
            let S = a*a;
            let V = a*a*a;
            alert("объем куба = " + V + " площадь боковой поверхности равен = " + S); 
        }
        function z14()
        {
            let r = 4;
            let C = 2 * Math.PI * r;
            let S = (r*r) * Math.PI;
            alert("Длина окружности = " + C.toFixed(2) + " Площадь круга = " + S.ToFixed(2));
        }
        function z15()
        {
            let a = 3;
            let b = 5;
            alert("до преобразований a=" + a + ", b=" + b);
            a = a + b;
            b = b - a 
            b = -b;
            a = a -b;
            alert("после преобразований a=" + a + ",  b=" + b);
        }
        function z16()
        {
            let a=2,b=4,c=8;
            let ar=(a+b+c)/3;
            let ge=Math.sqrt(a*b*c);
            alert("среднее арифметическое= " + ar.toFixed(2) + " среднее геометрическое = " + ge);
        }
        function z17()
        {
            let m = 0.048;
            let V = 0.00002;
            let ro = m/V;
            alert("плотность тела=" + ro);
        }
        function z18()
        {
            let nas = 37863;
            let S = 2.02;
            let plot = nas/S;
            alert("Плотность населения Монако= " + plot.toFixed(2));
        }
        function z19()
        {
            let kat1 = 6;
            let kat2 = 8;
            let gip = Math.sqrt(kat1*kat1 + kat2*kat2);
            alert("катет1=6б катет2=8, гипотенуза =" + gip);
        }
        function z20()
        {
            let r =5;
            let R=10;
            let Skol=(Math.PI*R*R)-(Math.PI*r*r);
            alert("радиус внутр. кольца 5, радиус внешн. кольца 10, S кольца=" + Skol.toFixed(2));
        }
        function z21()
        {
            let kat1 = 6;
            let kat2 = 8;
            let gip = Math.sqrt(kat1*kat1 + kat2*kat2);
            let P=kat1+kat2+gip;
            alert("периметр треугольника с катетами 6, 8 =" + P)
        }
        function z22()
        {
            let osn1=4;
            let osn2=6;
            let h=4; 
            let temp = osn2-osn1;
            let temp1= Math.sqrt(temp*temp+h*h);
            let P=osn1+osn2+(2*temp1);
            alert("Основание 1 = 4, основание 2 = 6, высота = 4, периметр = " + P.toFixed(2));
        }
    </script>
     <p> 1 zadanie </p> <button type="button" onclick=z1()>Try it</button>
     <p> 2 zadanie </p> <button type="button" onclick=z2()>Try it</button>
     <p> 3 zadanie </p> <button type="button" onclick=z3()>Try it</button>
     <p> 4 zadanie </p> <button type="button" onclick=z4()>Try it</button>
     <p> 5 zadanie </p> <button type="button" onclick=z5()>Try it</button>
     <p> 6 zadanie </p> <button type="button" onclick=z6()>Try it</button>
     <p> 7 zadanie </p> <button type="button" onclick=z7()>Try it</button>
     <p> 8 zadanie </p> <button type="button" onclick=z8()>Try it</button>
     <p> 9 zadanie </p> <button type="button" onclick=z9()>Try it</button>
     <p> 10 zadanie </p> <button type="button" onclick=z10()>Try it</button>
     <p> 11 zadanie </p> <button type="button" onclick=z11()>Try it</button>
     <p> 12 zadanie </p> <button type="button" onclick=z12()>Try it</button>
     <p> 13 zadanie </p> <button type="button" onclick=z13()>Try it</button>
     <p> 14 zadanie </p> <button type="button" onclick=z14()>Try it</button>
     <p> 15 zadanie </p> <button type="button" onclick=z15()>Try it</button>
     <p> 16 zadanie </p> <button type="button" onclick=z16()>Try it</button>
     <p> 17 zadanie </p> <button type="button" onclick=z17()>Try it</button>
     <p> 18 zadanie </p> <button type="button" onclick=z18()>Try it</button>
     <p> 19 zadanie </p> <button type="button" onclick=z19()>Try it</button>
     <p> 20 zadanie </p> <button type="button" onclick=z20()>Try it</button>
     <p> 21 zadanie </p> <button type="button" onclick=z21()>Try it</button>
     <p> 22 zadanie </p> <button type="button" onclick=z22()>Try it</button>