import React, { useEffect, useRef } from "react";
import propTypes from "prop-types";
import './../../css/input.css';

Input.propTypes = {
    type: propTypes.oneOf(["text", "email", "password", "number", "file", "url"]),
    name: propTypes.string,
    value: propTypes.oneOfType([propTypes.string, propTypes.number]),
    className: propTypes.string,
    autoComplete: propTypes.string,
    required: propTypes.bool,
    isFocused: propTypes.bool,
    handleChange: propTypes.func,
    defaultValue: propTypes.oneOfType([propTypes.string, propTypes.number]),
    variant: propTypes.oneOf(["primary", "error", "primary-outline"]),
    placeholder: propTypes.string,
    isError: propTypes.bool,
};

export default function Input({
    type = "text",
    name,
    value,
    className,
    autoComplete,
    required,
    isFocused,
    handleChange,
    defaultValue,
    variant = "primary",
    placeholder,
    isError,
}) {
    const input = useRef();

    useEffect(() => {
        if (isFocused) {
            input.current.focus();
        }
    }, []);

    return (
        <div className="flex flex-col items-start">
            <input
                type={type}
                name={name}
                value={value}
                defaultValue={defaultValue}
                className={`rounded-2xl bg-form-bg py-[13px] px-7 w-full ${
                    isError && "input-error"
                } input-${variant} ${className}`}
                ref={input}
                autoComplete={autoComplete}
                required={required}
                onChange={(e) => handleChange(e)}
                placeholder={placeholder}
            />
        </div>
    );
}
