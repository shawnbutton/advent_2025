export const doit1 = (testInput: string[]): number => {
    let value = 50
    let count = 0

    const lines = testInput.map(parseLine);


    lines.forEach((line) => {
        value = value + (line[1] * line[0]);
        if (value > 99) value = value - 100
        if (value < 0) value = value + 100
        if (value == 0) count++
    })

    return count;
};

export const parseLine: (line: string) => [number, number] = (line: string) => {
    const turn = line[0] === 'R' ? 1 : -1;
    const dist = parseInt(line.slice(1), 10);
    return [turn, dist];
};

// Load day01.txt from the project directory and parse each line.
// This function has no side effects other than reading the file and returns parsed tuples.
import { join } from 'node:path'
import { readFileSync } from 'node:fs'

export function loadDay01FromFile(filePath?: string): Array<[number, number]> {
    const resolvedPath = filePath ?? join(process.cwd(), 'src', 'day01.txt')
    const content = readFileSync(resolvedPath, 'utf-8')
    const lines = content.endsWith('\n')
        ? content.split('\n').slice(0, -1)
        : content.split('\n').filter((l) => l.length > 0)
    return lines.map(parseLine)
}

// Remove runtime side effects so tests can import this module without ESM import.meta
// Consumers (e.g., index.ts) should read files and call exported functions.
