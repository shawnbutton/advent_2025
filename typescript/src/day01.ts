export const doit1 = (testInput: string[]): number => {
    let value = 50
    let count = 0

    const lines = testInput.map(parseLine);

    lines.forEach((line) => {
        if (line[1] > 99) {
            const rotations = Math.floor(line[1] / 100);
            line[1] = line[1] - (rotations * 100);
        }

        value = value + (line[1] * line[0]);
        if (value > 99) {
            value = value - 100
        } else if (value < 0) {
            value = value + 100
        }

        if (value == 0) count++
    })

    return count;
};


export const doit2 = (testInput: string[]): number => {
    let value = 50
    let count = 0

    const lines = testInput.map(parseLine);

    lines.forEach((line) => {
        value = value + (line[1] * line[0]);
        if (value > 99) {
            const rotations = Math.floor(Math.abs(value) / 100);
            value = value - (100 * rotations)
            count = count + rotations
            // if (count == 0) count--
        } else if (value < 1) {
            const rotations = Math.floor(Math.abs(value) / 100) + 1;
            value = value + (100 * rotations)
            count = count + rotations
        }


        const literal = line[0] === 1 ? 'R' : 'L'
        console.log(`Line: ${literal}${line[1]}  ${value}  ${count}`);
    })

    return count
};

export const parseLine: (line: string) => [number, number] = (line: string) => {
    const turn = line[0] === 'R' ? 1 : -1;
    const dist = parseInt(line.slice(1), 10);
    return [turn, dist];
};

// Load day01.txt from the project directory and parse each line.
// This function has no side effects other than reading the file and returns parsed tuples.
import {join} from 'node:path'
import {readFileSync} from 'node:fs'

export function loadDay01FromFile(): Array<[number, number]> {
    const resolvedPath = join(process.cwd(), 'day01.txt')
    const content = readFileSync(resolvedPath, 'utf-8')
    const lines = content.endsWith('\n')
        ? content.split('\n').slice(0, -1)
        : content.split('\n').filter((l) => l.length > 0)
    return lines.map(parseLine)
}

