import { loadDay01FromFile, doit1 } from './day01'

function main(): void {
  try {
    const parsed = loadDay01FromFile()
    const result = doit1(parsed.map(([turn, dist]) => `${turn === 1 ? 'R' : 'L'}${dist}`))
    console.log(`Day 01 part 1: ${result}`)
  } catch (err) {
    const msg = err instanceof Error ? err.message : String(err)
    console.error(`Failed to run Day 01: ${msg}`)
    process.exitCode = 1
  }
}

main()
