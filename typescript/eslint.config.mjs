// Migrate to ESM for ESLint flat config to support eslint-config-love (ESM)
import love from 'eslint-config-love'

export default [
  {
    ...love,
    files: ['**/*.js', '**/*.ts']
  }
]

