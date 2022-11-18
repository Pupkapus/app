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