# README

## Port Conflict?

Need to figure out how to update script to kill process when stoppng PHP server function. Until then, if I need it, remember:

```sh
lsof -i tcp:3000
kill -9 [PID]
```
