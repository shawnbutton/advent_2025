import {loadDay01FromFile, doit1, doit2} from './day01'

const main = (): void => {
    const parsed = loadDay01FromFile()
    const input = parsed.map(([turn, dist]) => `${turn === 1 ? 'R' : 'L'}${dist}`);
    const part1Result = doit1(input)
    console.log(`Day 01 part 1: ${part1Result}`)
    const part2Result = doit2(input)
    console.log(`Day 01 part 2: ${part2Result}`)
};

main()
