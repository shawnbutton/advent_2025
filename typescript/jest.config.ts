import type { Config } from 'jest'

const config: Config = {
  preset: 'ts-jest',
  testEnvironment: 'node',
  collectCoverage: true,
  verbose: true,
  globals: {
    'ts-jest': {
      tsconfig: {
        isolatedModules: true,
        target: 'es2020',
        module: 'nodenext',
        moduleResolution: 'nodenext'
      },
      diagnostics: {
        ignoreCodes: [151002]
      }
    }
  }
}

export default config
