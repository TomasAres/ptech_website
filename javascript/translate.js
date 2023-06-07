// TRANSLATE

// index.js
const { Tolgee, LanguageStorage, ObserverPlugin, FormatSimple, BackendFetch } =
  window["@tolgee/web"];

const tolgee = Tolgee()
  .use(ObserverPlugin())
  .use(FormatSimple())
  .use(BackendFetch())
  .use(LanguageStorage())
  .init({
    defaultLanguage: "en",
    availableLanguages: "en, es, pt",
    watch: true,
    observerType: "text",
    observerOptions: { inputPrefix: "{{", inputSuffix: "}}" },
    enableLanguageStore: true,
  });

tolgee
  .run()
  .then(() => {
    document.getElementById("loading").style.display = "none";
  })
  .catch((e) => {
    console.log(e);
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

let activeLanguage = tolgee.getLanguage();

if (activeLanguage == "es") {
  $("body").addClass("es");
  $("body").removeClass("en").removeClass("pt");
} else if (activeLanguage == "en") {
  $("body").addClass("en");
  $("body").removeClass("es").removeClass("pt");
} else if (activeLanguage == "pt") {
  $("body").addClass("pt");
  $("body").removeClass("es").removeClass("en");
}
