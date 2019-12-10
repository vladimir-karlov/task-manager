module.exports = {
  "devServer": {
    "proxy": "http://testmanager.app"
  },
  "outputDir": "../public",
  "indexPath": "index.html",
  "transpileDependencies": [
    "vuetify"
  ],
  runtimeCompiler: true,
}