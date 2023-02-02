// TRANSLATE

// index.js
const { Tolgee, LanguageStorage, InContextTools, FormatSimple, BackendFetch } =
  window["@tolgee/web"];

const tolgee = Tolgee()
  .use(InContextTools())
  .use(FormatSimple())
  .use(BackendFetch())
  .init({
    //apiKey: "tgpak_ge3tamk7ovtda3zsnvqtiz3pomzgumdhnbztozdoofvwwntfoq",
    //apiUrl: "https://app.tolgee.io",
    defaultLanguage: "en",
    watch: true,
    observerType: "text",
    observerOptions: { inputPrefix: "{{", inputSuffix: "}}" },
    enableLanguageStore: true,
  });

tolgee.run().then(() => {
  document.getElementById("loading").style.display = "none";
});

$("#es").click(function () {
  tolgee.changeLanguage("es");
  $("body").addClass("es");
  $("body").removeClass("en").removeClass("pt");
});

$("#en").click(function () {
  tolgee.changeLanguage("en");
  $("body").addClass("en");
  $("body").removeClass("es").removeClass("pt");
});

$("#pt").click(function () {
  tolgee.changeLanguage("pt");
  $("body").addClass("pt");
  $("body").removeClass("en").removeClass("es");
});
