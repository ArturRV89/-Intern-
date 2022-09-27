// сделать из объекта data два других объекта(data1, data2), в одном данные в которых ключ с четным числом(hello2, hello4, ...),
// в другом данные которые значение с четным числом(value2, value4, ...)
// В консоль нужно выводить:

var data = {
    hello1: 'value2',
    hello2: 'value3',
    hello3: 'value4',
    hello4: 'value5',
    hello5: 'value1',
    hello6: 'value2',
    hello7: 'value3'
};

var data1 = {}
var data2 = {}

function sortByEven(arr) {
    return arr.sort(function (a) {
        var lastNum = Number(a[a.length - 1])
        return lastNum % 2 - 1
    })
}

function isEven(num) {
    return num % 2 === 0
}

function getNumberFromField(field) {
    return Number(field[field.length - 1])
}

var sortedValues = sortByEven(Object.values(data))

Object.keys(data).forEach(function (key, index) {
    var lastNum = getNumberFromField(key)
    var prefixValueNum = getNumberFromField(sortedValues[0])
    var tailValueNum = getNumberFromField(sortedValues[sortedValues.length - 1])

    if (isEven(lastNum)) {
        if (!isEven(tailValueNum)) {
            data1[key] = sortedValues.pop()
        }
    } else if (!isEven(lastNum)) {
        if (isEven(prefixValueNum)) {
            data2[key] = sortedValues.shift()
        }
    }
})
console.log(data1, data2);

