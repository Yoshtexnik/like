from aiogram import Bot, Dispatcher, executor, types
API_TOKEN = '851600929:AAG79NCn2lEPCtXa5Z5ezYc9ORuv2ZnnB-k'
import time

bot = Bot(token=API_TOKEN)
dp = Dispatcher(bot)

@dp.message_handler(commands=['start'])
async def start(message: types.Message):
    millisec = round(time.time() * 1000)
    send = await message.answer("Bot tezligi: 0 ms")
    current = round(time.time() * 1000) - millisec
    xabar = "Bot tezligi: " + str(current) + " ms"
    await send.edit_text(xabar)

if __name__ == '__main__':
    executor.start_polling(dp, skip_updates=True)
