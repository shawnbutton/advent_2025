import {
    doit1, doit2, parseLine,
} from "../src/day01";

const testInput = [
    'L68',
    'L30',
    'R48',
    'L5',
    'R60',
    'L55',
    'L1',
    'L99',
    'R14',
    'L82',
]


describe('Day 01', () => {

    it('should parse a line', () => {
        expect(parseLine('L23')).toEqual([-1, 23])
        expect(parseLine('R45')).toEqual([1, 45])
    })

    it('should run pass the example 1', () => {
        expect(doit1(testInput)).toEqual(3);
    });

    it('should run pass the example 2', () => {
        expect(doit2(testInput)).toEqual(6);
    });
});


// describe('part 2', () => {
//
// });
