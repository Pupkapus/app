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
<p align = "center">Лабораторная работа №5</p>
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
 //1_задание 
var user = {};
user.name="John";
user.surname="Smith";
user.name="Pete";
delete user.name;

//2_задание
console.log("2_zadanie");
function isEmpty(obj)
{
    if (Object.keys(obj).length == 0)
        return true;
    else return false;
}

let schedule = {};
console.log( isEmpty(schedule) ); // true
schedule["8:30"] = "get up";
console.log( isEmpty(schedule) ); // false

//3_задание
console.log("3_zadanie");
const user1 = {
    name: "John"
};
// это будет работать?
user1.name = "Pete";
console.log(user1.name);

//4_задание
console.log("4_zadanie");
let salaries = {
    John: 100,
    Ann: 160,
    Pete: 130
  };
let sum = salaries.John + salaries.Ann + salaries.Pete;
console.log("общ. зп = " + sum);  

//5_задание
console.log("5_zadanie");

let menu = {
    width: 200,
    height: 300,
    title: "My menu"
  }

function multiplyNumeric(obj)
{
    for (let key in obj)
    {
        if (typeof obj[key]=='number')
        {obj[key] *=2;}
    }
}
multiplyNumeric(menu);
let temp = menu.title;
console.log(temp); 

//6_задание
console.log("6_zadanie");

let fruits = ["Яблоки", "Груша", "Апельсин"];

// добавляем новое значение в "копию"
let shoppingCart = fruits;
shoppingCart.push("Банан");

// что в fruits?
console.log( fruits.length ); 

//7_задание
console.log("7_zadanie");

let styles = ["Джаз", "Блюз"];
styles.push("Рок-н-ролл");
styles[Math.floor(styles.length/2)]="Классика";
console.log(styles.shift());
styles.unshift("Рэп", "Регги");
console.log(styles.join(", "));

//8_задание
console.log("8_zadanie");

let arr = ["a", "b"];
arr.push(function() {
  console.log( this );
})
console.log(arr[2]()); 

//9_задание
//console.log("9_zadanie");

  //  let mas = [];
//do {
   // let data = prompt();
    
    //if (!isNaN(data) || data === null)
    //    break;
  //  mas.push(data);
//} while (true);

//console.log(mas.length);

//10_задание
console.log("10_zadanie");
var arr1 = [2, -1, 2, 3, -9];

function getMaxSubSum(arr) {
    let newSum = 0, maxSum = 0;
    for (let i = 0; i < arr.length; i++) {
        newSum += arr[i];
        if (arr[i] > newSum) newSum = arr[i];
        if (newSum > maxSum) maxSum = newSum;
    }

    return maxSum;
}
console.log(getMaxSubSum(arr1));

//11_задание
console.log("11_zadanie");
function onlyDoubles(arr) {
    let temp = [];
    let map = new Map();

    for (const elem of arr) {
        let inMap = map.get(elem);


        if (!inMap || inMap < 2) {
            map.set(elem, (inMap ?? 0) + 1)
            temp.push(elem);
        }

    }

    return arr = temp;
}

let doubles = [1, 1, 1, 1, 1, 2, 3, 4, 4, 5, 6, 7, 7, 7];
console.log(onlyDoubles(doubles));

//12_задание
console.log("12_zadanie");

let arr2 = [4,-5,22,13,1,-9,45,-5,8,9];
console.log(arr2);
let max = arr2[0];
let ind = 0;
for (let i=1; i<arr2.length; i++)
{
    if (arr2[i]>max)
    {
        max = arr2[i];
        ind = i;
    }
}

for (let i = 0; i < 3; i++) {
    if (ind === arr2.length - 1) break;
    let temp1 = arr2[ind + 1];
    arr2.splice(ind + 1, 1);//1 позиция откуда удаляем/вставляем, 2 позиция сколько удаляем
    arr2.splice(ind, 0, temp1);//3 позиция, что вставляем
    ind++;
}

let temp2 = arr2[ind - 1];
arr2.splice(ind-1,1);
arr2.splice(ind, 0, temp2);

console.log(arr2);

//13_задание
console.log("13_zadanie");

function otr(arr)
{
    let summa=0;
    for (let i=0; i<arr.length;i++)
    {
        if (arr[i]<0)
        {
            summa+=arr[i];
        }
    }
    return summa
}

let arr3=[1,-1,2,-2,3,-3,4,-4,5,-5];
console.log(otr(arr3));

//14_задание
console.log("14_zadanie");

function proizv(arr)
{
    let otvet = 1;
    for (let i=0 ; i < arr.length; i++)
    {
        if (i%2==1)
        {
            otvet *=arr[i];
        }
    }
    return otvet;
}

var arr4 = [1,2,3,4,5,4,3,2,1];
console.log(proizv(arr4));

//15_задание
console.log("15_zadanie");

function mezh0(arr)
{
    let poz1, poz2, summa2=0;
    for(let i=0; i < arr.length-1; i++ )
    {
        if (poz1==undefined)
        {
            if (arr[i]==0)
            {poz1 = i;}
        }
        else if (poz2==undefined)
        {
            if (arr[i]==0)
            {poz2 = i;}
        }
        else{break;}
    }
    if ((poz1==undefined)||(poz2==undefined))
    {return summa2;}
    else{
        for (let j=poz1+1; j < poz2; j++)
        {
            if (j==poz2)
            {
                break;
            }
            else{
                summa2 +=arr[j];
            }
        }
    }
    return summa2;
}

var arr15=[1,2,0,5,6,7,0,4,3,2];
console.log(mezh0(arr15));

//16_задание
console.log("16_zadanie");

function Maximum(arr)
{
    max = arr[0];
    for (let i=1; i<arr.length; i++)
    {
        if (arr[i]>max)
        {
            max = arr[i];
        }
    }
    return max;
}
console.log(Maximum(arr15));

//17_задание
console.log("17_zadanie");

function Minchet(arr)
{
    let min=arr[0];
    for (let i=1;i<arr.length;i++)
    {
        if (i%2==0)
        {
            if (arr[i]<min)
            {min = arr[i];}
        }
    }
    return min;
}
console.log(Minchet(arr15));

//18_задание
console.log("18_zadanie");

function StartsWithZeros(arr) {
    for (let i = 1; i < arr.length; i++) {
        if (arr[i] === 0)
            arr.unshift(arr.splice(i--, 1)[0]);
    }
}
var arr18 = [0, 1, 2, 3, 0, 4, 5, 0, 6, 7, 0, 8, 0, 0, 0, 9];
StartsWithZeros(arr18);
console.log(arr18);

//19_задание
console.log("19_zadanie");

function SumNumbMinMax(arr)
{
    let ind1, ind2, summa3;
    max = arr[0];
    for (let i=1; i< arr.length; i++)
    {
        if (arr[i]>max)
        {
            max = arr[i];
            ind1 = i;
        }
    }
    min = arr[0];
    for(i = 1; i < arr.length; i++)
    {
        if (arr[i]<min)
        {
            min = arr[i];
            ind2 = i;
        }
    }
    summa3=ind1+ind2;
    return summa3;
}
var arr19 = [2,-5,45,23,-8,10];
console.log(SumNumbMinMax(arr19));

//20_задание
console.log("20_zadanie");

function minmod(arr)
{
    min = arr[0];
    for(i = 1; i < arr.length; i++)
    {
        if (Math.abs(arr[i]) < Math.abs(min))
        {
            min = arr[i];
        }
    }
    return min;
}

let arr20 = [-3, -2, -1, 1, 2, 3];
console.log(minmod(arr20));

//21_задание
console.log("21_zadanie");

function RandRevers() {
    let arr = [];
    for (let i = 0; i < 10; i++) {
        arr[i] = Math.floor(Math.random() * (10 - -10 + 1)) - 10;
    }

    return arr = [...arr.slice(0, 5).reverse(), ...arr.slice(5, 10).reverse()]
}
console.log(RandRevers());

//22_задание
console.log("22_zadanie");

function z22()
{
    let arr = [];
    for (let i = 0; i < 12; i++) {
        arr[i] = Math.floor(Math.random() * (12 - -12 + 1)) - 12;
    }
    console.log(arr);

    for (let i = 0; i < 4; i++) {
        arr.unshift(arr.pop());
    }

    return arr;
}

console.log(z22());
```

<p align = "center" >Codewars</p>




<p align = "center" >ВЫВОД</p>
<p>Подводя итог всему сказанному, могу сделать вывод, что, поработав на javascript, я вспомнил многое и применил это на практике. Все задачи были выполнены.</p>