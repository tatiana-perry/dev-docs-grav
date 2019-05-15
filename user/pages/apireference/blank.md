<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://api.apiary.io/seeds/embed.js"></script>

</head>

<body>
<script>
    var embed = new Apiary.Embed({
      "subdomain": "testing799",
      "customFonts":{
        "googleFonts": "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400"
      },
      "preferences": {
        "console": true,
        "defaultHost": "production",
        "fluidHumanColumn": "true",
        "permalinks": true,
        "displayHttpMethods": true
      },
        hosts: [
          "production"
        ],
      "element": "#v3api",
      "codeExamples": [
        "php",
        "ruby",
        "cUrl",
        "python",
        "nodeJs"
      ],
      "theme":{
        "font-family": "Source Sans Pro",
        "tableOfContents":{
          "background-color": "#f6f7f9", 
            "section": {
              "title": {
                "text":{ //Introduction and Reference
                  "color": "#4b71fc",
                  "font-weight": "400",
                  "font-size": "18px",
                    "$hover":{
                      "color": "#34313F" 
                    }
                }
              }, //Introduction
              "item":{
                "text":{
                  "font-weight": "400",
                  "color": "#5d6576",
                  "font-size": "16px"
                }, //text
                "subitems":{
                  "color": "#34313F",
                  "subitem":{
                    "subitem":{
                    "color": "#34313F",
                    "font-size": "14px",
                    "font-weight": "300"
                    }//subitem
                  }//subitem
                }//subitems
              }//item
            }//section
        },//table of contents
        "humanColumn":{
          "content":{
            "apiName":{
              "font-weight":"400"
            },//apiName
            "section":{
              "title": {
                "color": "#4b71fc",
                "font-weight": "400",
                "font-size": "14px"
              },//title
              "resourceGroups":{
                "color": "red",
                "resourceGroup":{
                  "color":"#3b4151",
                  "font-weight":"400",
                    "resources":{
                        "resource":{
                            "name":{
                              "color":"#3b4151",
                              "font-weight": "400"
                            },//name
                            "actions":{
                                "action": {
                                    "description": {
                                      "color":"#3b4151"
                                    }//description
                                }//action
                            }//actions
                        }//resource
                    }//resouces
                }//resourceGroup
              },//resourceGroups
              "apiDescription":{
                "color": "#3b4151"
              }
            }//section
          },//content
          "header": {
            "breadcrumb": {
              "container": {
                "item": {
                  "$section": {
                    "color": "#4b71fc",
                    "font-weight": "400"
                  }//section
                }//item
              }//container
            }//breadcrumb
          }//header
        },//human column    
        "machineColumn":{
          "codeExample":{
            "lineNumber":{
              "color": "#919596",
              "font-weight": "400"
            },//lineNumber
            "line":{
              "font-size": "14px",
              "font-weight": "400",
              "color": "#B999E6",
                "boolean":{
                  "color": "#F6F7F9"
                },//boolean
                "number":{
                  "color": "#F6F7F9"
                }//numnber
            }//line
          },//codeexample
          "content":{
            "background-color": "#121118",
            "parameters":{
              "title":{
                "font-weight": "400"
              }, //title
              "list":{
                "parameter": {
                  "$optional": {
                    "color": "#F6F7F9",
                    "font-weight": "400"
                  } //optional
                }//parameter
              }//list
            },//parameters
            "blankSlate":{
              "title":{
                "color": "#F6F7F9"
              },
              "text":{
                "color": "#F6F7F9"
              },
              "link": {
                "display": "none"
              }
            },//blankslate
            "breadcrumbs":{
              "container":{
                "background-color": "#121118",
                "color": "#F6F7F9"
              }
            },
            "destination":{
              "container":{
                "method": {
                  "background-color": "#5d6577",
                  "color": "white",
                  "font-weight": "400",
                  "font-size": "14px"
                },//method
                "protocol":{
                  "font-weight": "400",
                  "font-size": "16px"
                },//protocol
                "host":{
                  "font-weight": "400",
                  "font-size": "16px"
                },//host
                "uriTemplate":{
                  "container":{
                    "font-weight": "400",
                    "font-size": "16px"
                  }//container
                }//uritemplate
              }//container
            }, //destination
            "title": {
                "text": {
                  "color": "#F6F7F9",
                  "font-weight": "400"
                }//text
            }//title
          },//content
          "header":{
            "background-color": "#121118"
          }
        }//machine column
      }
  });
</script>

<div id="v3api"></div>
</body>


