module.exports = {
    presets: [
      ["@babel/preset-env", {
        targets: {
          browsers: ["> 1%", "last 2 versions"]
        },
        useBuiltIns: "usage",
        corejs: 3
      }]
    ]
  };