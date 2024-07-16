```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class External (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Customcode**

```uml
@startuml
class External  #Gold {
  # array $code
  # array $cutter
  # Placeholder $placeholder
  # $db
  # $user
  # $app
  + __construct(?Placeholder $placeholder = null)
  + set(string $string, int $debug) : string
  # getCode(string $target, array $bucket) : void
  # cut(string $string, string $sequence, ...) : string
}

note right of External::__construct
  Constructor.

  since: 3.2.0
end note

note right of External::set
  Set the external code string & load it in to string

  since: 3.2.0
  return: string
end note

note right of External::getCode
  Get the External Code/String

  since: 3.2.0
  return: void
end note

note right of External::cut
  Cut the External Code/String

  since: 3.2.0
  return: string
  
  arguments:
    string $string
    string $sequence
    string $key
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---1cef0266_99e2_40d8_919f_c2ce32226b0a---Power
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

