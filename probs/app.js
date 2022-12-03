const TelegramBot = require('node-telegram-bot-api')
const token = '5881552370:AAGCb0HuWBC7rWLD5amehZACf1MdXUpcmGE'
const bot =  new TelegramBot(token, {polling: true})

bot.onText(/\/echo (.+)/, (msg, match) => {

    const chatId = msg.chat.id
    const resp = match[1]

    bot.sendMessage(chatId, resp)
})

let users = []

bot.onText(/\/register/, (msg, match) => {
    const chatId = msg.chat.id
    users.push(chatId)
    console.log('user registered')
    bot.sendMessage(chatId, 'Done.')
})

// setInterval(function(){
//     if (users.length>0) {
//         for (let i=0; i< users.length;i++)
//         {
//             bot.sendMessage(users[i], 'Is this annoying?')
//         }
//     }
//     else{
//         console.log('no user registered')
//     }
// },1000)

bot.on('message', (msg) => {
    const chatId = msg.chat.id
    if(msg.text == 'time')
    {
        var d = new Date();
        bot.sendMessage(chatId, "time:"+d.toLocaleString())
    }
    if (msg.text == 'poll')
    {
        bot.sendPoll(chatId, 'Is Telegram great?', ['Никита Коньков', 'Некита Канъков']);
    }
})