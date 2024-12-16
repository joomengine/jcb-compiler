```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Uri (Details)
> namespace: **VDM\Joomla\Componentbuilder\Utilities**

```uml
@startuml
class Uri << (F,LightGreen) >> #RoyalBlue {
  - string $version
  - string $url
  + __construct(string $url = 'https://api.joomlacomponentbuilder.com', string $version = 'v1')
  + get(string $path) : JoomlaUri
  + api() : string
  + setUrl(string $url) : void
  + getUrl() : ?string
  - setVersion(string $version) : void
}

note right of Uri::__construct
  Constructor
example: https://api.joomlacomponentbuilder.com

  since: 3.2.0
end note

note right of Uri::get
  Method to build and return a full request URL for the request.  This method will
add appropriate pagination details if necessary and also prepend the API url
to have a complete URL for the request.

  since: 3.2.0
  return: JoomlaUri
end note

note right of Uri::api
  Get the full API URL

  since: 3.2.0
  return: string
end note

note right of Uri::setUrl
  Set the URL of the API
example: https://api.joomlacomponentbuilder.com

  since: 3.2.0
  return: void
end note

note right of Uri::getUrl
  Get the URL of the API

  since: 3.2.0
  return: ?string
end note

note right of Uri::setVersion
  Set the version of the API

  since: 3.2.0
  return: void
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---1c5bf656_f73a_46ec_bb9d_aa3932d5b3de---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

