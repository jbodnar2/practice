// @ts-check
import liveServer from "live-server";

liveServer.start({
  port: 3000,
  host: "localhost",
  root: ".",
  open: true,
  wait: 500,
  mount: [
    // ["/endpoint", "path"]
  ],

  logLevel: 2,
  middleware: [
    function (req, res, next) {
      next();
    },
  ],
});
