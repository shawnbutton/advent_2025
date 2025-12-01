import { dirname, join } from 'node:path';
import { readFileSync } from 'node:fs';
import { fileURLToPath } from 'node:url';


export const doit1 = (testInput: string[]): number => {
    let value = 50
    let count = 0

    const lines = testInput.map(parseLine);


    lines.forEach((line) => {
        value = value + (line[1] * line[0]);
        if (value > 99) value = value - 100
        if (value < 0) value = value + 100
        if (value == 0) count++
        console.log(value, count)
    })

    return count;
};

export const parseLine: (line: string) => [number, number] = (line: string) => {
    const turn = line[0] === 'R' ? 1 : -1;
    const dist = parseInt(line.slice(1), 10);
    return [turn, dist];
};

// Define __dirname equivalent for ESM
// @ts-ignore
const __dirname = dirname(fileURLToPath(import.meta.url));
const filePath = join(__dirname, 'day01.txt');
const fileContents = readFileSync(filePath, 'utf-8');
let lines: string[];
if (!fileContents.endsWith('\n')) {
  // don’t slice off last line
  lines = fileContents.split('\n').filter((l) => l.length > 0);
} else {
  lines = fileContents.split('\n').slice(0, -1);
}

const total1 = doit1(lines)
console.log(total1)

// const total2 = doit2(lines)
// console.log(total2)
