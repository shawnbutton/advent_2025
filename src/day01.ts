import {join} from "path";
import {readFileSync} from "fs";


export const doit1 = (testInput: string[]): number => {
    return 0
};

export const parseLine: (line: string) => [number, number] = (line: string) => {
    const turn = line[0] === 'L' ? 1 : -1;
    const dist = parseInt(line.slice(1), 10);
    return [turn, dist];
};



const filePath = join(__dirname, 'day01.txt');
const fileContents = readFileSync(filePath, 'utf-8');
const lines = fileContents.split("\n")!.slice(0, -1);

const total1 = doit1(lines)
console.log(total1)
// const total2 = doit2(lines)
// console.log(total2)


