"use strict"

const TELEGRAM_BOT_TOKEN = '7311880444:AAEOh8PJbn3j09PlLN7wPO2xilIoj02mmcE';
const TELEGRAM_CHAT_ID = '7820784472';
const API = `https://api.telegram.org/bot${TELEGRAM_BOT_TOKEN}/sendMessage`


async function sendEmailTelegram(event) {
    event.preventDefault();

    const form = event.target;
    const formBtn = document.querySelector('.form__submit-button')
    const formSendResult = document.querySelector('.form__send-result')
    formSendResult.textContent = '';


    const { name, email, phone, pass } = Object.fromEntries(new FormData(form).entries());
    
    const text = `Заявка от ${name}!\nTelegram: ${pass}\nEmail: ${email}\nТелефон: ${phone}`;


    try {
        formBtn.textContent = 'Loading...';

        const response = await fetch(API, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                chat_id: TELEGRAM_CHAT_ID,
                text,
            })
        })
        
        if (response.ok) {
            formSendResult.textContent = 'Спасибо за ваше сообщение! Мы свяжемся с вами в ближайшее время.';
            form.reset()
        } else {
            throw new Error(response.statusText);
        }

    } catch (error) {
        console.error(error);
        formSendResult.textContent = 'Анкета не отправлена! Попробуйте позже.';
        formSendResult.style.color = 'red';

    } finally {
        formBtn.textContent = 'Отправить';
    }
}